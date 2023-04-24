<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request){
         $search=$request->input('search');
         $cities=$request->input('cities[]');
         $type=$request->input('type');
         $providers=User::role('provider')->get();
         $companies=Company::where('status','Accepted');
         if($search){
            $providers=$providers->where('name', 'LIKE', '%' . $search . '%');
            $companies=$companies->where('name', 'LIKE', '%' . $search . '%');
         }
         if($cities){
            foreach ($cities as $city) {
                $providers = $providers->filter(function ($provider) use ($city) {
                    return $provider->cities->contains(function ($value) use ($city) {
                        return $value->label === $city;
                    });
                });
                $companies = $companies->filter(function ($company) use ($city) {
                    return $company->user->cities->contains(function ($value) use ($city) {
                        return $value->label === $city;
                    });
                });
            }

         }
         if($type){
            if($type='company'){
               return view('User.includes.service',compact('companies'));
            }else{
                return view('User.includes.service',compact('providers'));
            }
         }
         return view('User.includes.service',compact('providers','companies'));


    }
}
