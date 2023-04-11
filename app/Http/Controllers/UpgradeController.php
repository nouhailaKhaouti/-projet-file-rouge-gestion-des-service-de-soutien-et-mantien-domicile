<?php

namespace App\Http\Controllers;

use App\Models\Upgrade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function create()
    {
        //

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
        $Upgrade = Upgrade::where('user_id', $userid)->get();
        if (is_countable($Upgrade) && count($Upgrade) == '0') {
            if ($request->has('cin_file')) {
                $cin_file = $request->file('cin_file')->getClientOriginalName();
                $request->cin_file->move('cin_file', $cin_file);
            }
            if ($request->has('certificat')) {
                $certificat = $request->file('certificat')->getClientOriginalName();
                $request->certificat->move('certificat', $certificat);
            }
            $provider = new Upgrade();
            $provider->cin = $request->cin;
            $provider->cin_file = $cin_file;
            $provider->certificat = $certificat;
            $provider->user_id=$userid;
            $provider->save();
            return redirect()->back()->with('message', 'your request is successfuly send wait patiently for the reply');
        }
    }
    public function approved_Upgrade($id)
    {
        $Upgrade = Upgrade::find($id);
        $Upgrade->status = 'accepted';
        $Upgrade->save();
        $user=User::find($Upgrade->user_id);
        $user->role="Provider";
        $status=$Upgrade->status;
        $name=auth()->user()->username;
        // Mail::to($Upgrade->user->email)->send(new NotifyUpgrade( $name, $status));
        return redirect()->back();
    }
    public function refused_Upgrade($id)
    {
        $Upgrade = Upgrade::find($id);
        $Upgrade->status = 'refused';
        $Upgrade->save();
        $status=$Upgrade->status;
        $name=auth()->user()->username;
        // Mail::to($Upgrade->user->email)->send(new NotifyUpgrade( $name, $status));
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Upgrade $upgrade)
    {
        //
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
