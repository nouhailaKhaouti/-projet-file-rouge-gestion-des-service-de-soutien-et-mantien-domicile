<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\location;
use App\Models\Telephone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
         $company=new Company();
         $company->name=$request('name');
         $company->user_id=$userid;
         $company->website=$request('website');
         $company->commercialRegisterN=$request('commercialRegisterN');
         $company->nemploi=$request('nemploi');
         if ($request->hasFile('icon')){
            //we create a new name for the image 
            $path = time(). uniqid() . '.' . $request->file('icon')->getClientOriginalExtension();
            //and after we move it to an other file called doctorimage that will be created automaticly ones we upload the image 
            $request->file('icon')->move('Companyimage', $path);
                // dd($path);
        $company->icon=$path;
        $user->icon=$path;
        }
         $company->save();
        //  locations:
         foreach ($request->title as $key => $value) {      
            $location=new location();
            $location->title=$value;
            $location->country=$request[$key]->country;
            $location->country=$request[$key]->city;
            $location->country=$request[$key]->street;
            $location->country=$request[$key]->appartement;
            $location->country=$company->id;
            $location->save();
        }
        // telephone:
        foreach ($request->phone as $value) {      
            $Telephone=new Telephone();
            $Telephone->label=$value;
            $Telephone->country=$company->id;
            $Telephone->save();
        }
        $user->update();
        $cities = array();
        foreach ($request->input('cities') as $city) {
            $data = City::firstOrCreate(['label' =>  strtolower($city)]);
            array_push($cities, $data->id);
        }
        $user->cities()->attach($cities);

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
        $user->role="Company";
        $status=$Company->status;
        $name=auth()->user()->username;
        // Mail::to($Company->user->email)->send(new NotifyCompany( $name, $status));
        return redirect()->back();
    }
    public function refused_Company($id)
    {
        $Company = Company::find($id);
        $Company->status = 'refused';
        $Company->save();
        $status=$Company->status;
        $name=auth()->user()->username;
        // Mail::to($Company->user->email)->send(new NotifyCompany( $name, $status));
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Company::destroy($id);
    }
}
