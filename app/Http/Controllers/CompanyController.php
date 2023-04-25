<?php

namespace App\Http\Controllers;

use App\Mail\NotifyUpgrade;
use App\Models\CheckList;
use App\Models\City;
use App\Models\Company;
use App\Models\location;
use App\Models\Telephone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user=Auth::user()->id;
        $company=$user->company;
        return view('User.company.company',compact('company'));
    }

    public function Company_table(){
        $companies=Company::all();
        return view('Admin.Companies.company',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $userid = Auth::user()->id;
        $user=User::find($userid);
        $Upgrade = Company::where('user_id', $userid)->get();
        if (is_countable($Upgrade) && count($Upgrade) == '0') {
         $company=new Company();
         $company->name=$request->input('name');
         $company->user_id=$userid;
         $company->service=$request->input('service');
         $company->website=$request->input('webSite');
         $company->commercialRegisterN=$request->input('commercialRegisterN');
         $company->nemploi=$request->input('nemploi');
         if ($request->hasFile('image')){
            //we create a new name for the image 
            $path = time(). uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            //and after we move it to an other file called doctorimage that will be created automaticly ones we upload the image 
            $request->file('image')->move('Companyimage', $path);
                // dd($path);
            $company->icon=$path;
            $user->icon=$path;
        }
         $company->save();
        //  locations:
        foreach ($request->title as $key => $value) {      
            $location=new location();
            $location->title=$value;
            $location->country=$request['country'][$key];
            $location->city=$request['city'][$key];
            $location->street=$request['street'][$key];
            $location->appartement=$request['appartement'][$key];
            $location->company_id=$company->id;
            $location->save();
        }
        // telephone:
        $telephones = $request->input('phones');

        foreach ($telephones as $phone) {
            $label = $phone;
            // insert the phone into the database
            Telephone::create([
                'label' => $label,
                'company_id' => $company->id
            ]);
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

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $company=Company::find($id);
        $company->website=$request('website');
        $company->nemploi=$request('nemploi');
        $company->update();
    }
    public function approved_Company($id)
    {
        $Company = Company::find($id);
        $Company->status = 'accepted';
        $Company->save();
        $user=User::find($Company->user_id);
        $role_id=4;
        $rolesId=explode(',',$role_id);
        $role=Role::where('id',$rolesId)->get();
        $user->syncRoles($role);
        $status=$Company->status;
        $name_user = auth()->user()->name;
        $message="the Admin has updated your request for Upgrade the ".optional($Company->updated_at)->format('d/m/Y');
        $subject='Your upgrade status has been updated';
        Mail::to($Company->user->email)->send(new NotifyUpgrade( $name_user, $status,$message,$subject));
        return redirect()->back();
    }
    public function refused_Company($id)
    {
        $Company = Company::find($id);
        $Company->status = 'refused';
        $Company->save();
        $status=$Company->status;
        $name_user = auth()->user()->name;
        $message="the Admin has updated your request for Upgrade the ".optional($Company->updated_at)->format('d/m/Y');
        $subject='Your upgrade status has been updated';
        Mail::to($Company->user->email)->send(new NotifyUpgrade( $name_user, $status,$message,$subject));
        return redirect()->back();
    }
    public function Company()
    {
        //
        $users=User::role('Company')->get();
        return view('Admin.table.Company',compact('users'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Company::destroy($id);
    }
}
