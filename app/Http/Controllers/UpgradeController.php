<?php

namespace App\Http\Controllers;

use App\Mail\NotifyUpgrade;
use App\Models\CheckList;
use App\Models\City;
use App\Models\Upgrade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class UpgradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $upgrades=Upgrade::all();
        return view('Admin.Upgrade.request',compact('upgrades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function request_demande($id)
    {
        //
        $upgrade=Upgrade::find($id);
        return view('Admin.Upgrade.request_demande',compact('upgrade'));
    }

    public function download_cin($id)
    {
      $Upgrade=Upgrade::find($id);
      $filename=$Upgrade->cin_file;
      $file_path=public_path() . "/cin_file". "/" . $filename;
      $headers=array('content_type' => 'application/pdf');
      return Response()->download($file_path ,$filename,$headers);
    }
    public function download_certificat($id)
    {
      $Upgrade=Upgrade::find($id);
      $filename=$Upgrade->certificat;
      $file_path=public_path() . "/certificat". "/" . $filename;
      $headers=array('content_type' => 'application/pdf');
      return Response()->download($file_path ,$filename,$headers);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $userid = Auth::user()->id;
        $user=User::find($userid);
        $Upgrade = Upgrade::where('user_id', $userid)->get();
        if (is_countable($Upgrade) && count($Upgrade) == '0') {
            if ($request->hasFile('cin_file')) {
                $cin_file = $request->file('cin_file')->getClientOriginalName();
                $request->cin_file->move('cin_file', $cin_file);
            }
            if ($request->hasFile('certificat')) {
                $certificat = $request->file('certificat')->getClientOriginalName();
                $request->certificat->move('certificat', $certificat);
            }
            $provider = new Upgrade();
            $provider->cin = $request->cin;
            $provider->cin_file = $cin_file;
            $provider->certificat = $certificat;
            $provider->user_id=$userid;
            $provider->save();
            $user->service_id = $request->input('service');
            $user->phone=$request->input('phone');
            $user->description=$request->input('description');
            $user->adresse=$request->input('adresse');
            $user->city=$request->input('city');
            $user->country=$request->input('country');
            $user->postal_code=$request->input('postal_code');
            if ($request->hasFile('image')) {
                    //we create a new name for the image 
                    $path = time() . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                    //and after we move it to an other file called doctorimage that will be created automaticly ones we upload the image 
                    $request->file('image')->move('Userimage', $path);
                    // dd($path);
                    $user->icon=$path;
                    // dd($img);
            }
            $user->update();
            $cities = array();
            foreach ($request->input('cities') as $city) {
                $data = City::firstOrCreate(['label' =>  strtolower($city)]);
                array_push($cities, $data->id);
            }
            $user->cities()->attach($cities);
            
            $checkLists = $request->input('checkLists');

            foreach ($checkLists as $checkList) {
                $label = $checkList['name'];
                $price = $checkList['price'];

                // insert the checklist into the database
                CheckList::create([
                    'title' => $label,
                    'prix' => $price,
                    'user_id' => $userid
                ]);
            }
            return redirect()->route('profile')->with('message', 'your request is successfuly send wait patiently for the reply');
        }else{
            return redirect()->route('profile')->with('message', 'you already sended a request before');
        }
    }
    public function approved_provider($id)
    {
        $Upgrade = Upgrade::find($id);
        $Upgrade->status = 'accepted';
        $Upgrade->save();
        $user=User::find($Upgrade->user_id);
        $role_id=3;
        $rolesId=explode(',',$role_id);
        $role=Role::where('id',$rolesId)->get();
        $user->syncRoles($role);
        $status=$Upgrade->status;
        $name = auth()->user()->name;
        $message="the Admin has updated your request for Upgrade the ".optional($Upgrade->updated_at)->format('d/m/Y');
        $subject='Your upgrade status has been updated';
        Mail::to($Upgrade->user->email)->send(new NotifyUpgrade( $name, $status,$message,$subject));
        return redirect()->back();
    }
    public function refused_provider($id)
    {
        $Upgrade = Upgrade::find($id);
        $Upgrade->status = 'refused';
        $Upgrade->save();
        $status=$Upgrade->status;
        $name = auth()->user()->name;
        $message="the Admin has updated your request for Upgrade the ".optional($Upgrade->updated_at)->format('d/m/Y');
        $subject='Your upgrade status has been updated';
        Mail::to($Upgrade->user->email)->send(new NotifyUpgrade( $name, $status,$message,$subject));
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function Provider()
    {
        //
        $users=User::role('Provider')->get();
        return view('Admin.tables.Providers',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upgrade $upgrade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upgrade $upgrade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upgrade $upgrade)
    {
        //
    }
}
