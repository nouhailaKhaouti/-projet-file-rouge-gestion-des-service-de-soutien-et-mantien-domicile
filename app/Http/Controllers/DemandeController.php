<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $price=0;
        $checkLists = $request->input('checkLists', []);
        foreach($checkLists as $checkList){
            $value=CheckList::find($checkList);
            $price+=$value->price;
        }
        $demande=new Demande();
        $demande->title=$request->title;
        $demande->description=$request->description;
        $demande->price=$price;
        $demande->jour=$request->jour;
        $demande->type=$request->type;
        $demande->city=$request->city;
        $demande->adresse=$request->adresse;
        $demande->service_id=$request->service;
        $demande->provider_id=$request->provider;
        $demande->user_id=$request->user;
        $demande->save();
        $demande->checkLists()->attach($checkLists);
        return redirect()->back()->with('message' , 'Your demande has been send successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $price=0;
        $checkLists = $request->input('checkLists', []);
        foreach($checkLists as $checkList){
            $value=CheckList::find($checkList);
            $price+=$value->price;
        }
        $demande=Demande::find($id);
        $demande->title=$request->title;
        $demande->description=$request->description;
        $demande->price=$price;
        $demande->jour=$request->jour;
        $demande->type=$request->type;
        $demande->city=$request->city;
        $demande->adresse=$request->adresse;
        $demande->service_id=$request->service;
        $demande->provider_id=$request->provider;
        $demande->user_id=$request->user;
        $demande->update();
        $demande->checkLists()->attach($checkLists);
    }

    public function approved_Demande($id)
    {
        $Demande = Demande::find($id);
        $Demande->status = 'accepted';
        $Demande->save();
        $status=$Demande->status;
        $name=auth()->user()->username;
        // Mail::to($Demande->user->email)->send(new NotifyDemande( $name, $status));
        return redirect()->back();
    }
    public function refused_Demande($id)
    {
        $Demande = Demande::find($id);
        $Demande->status = 'refused';
        $Demande->save();
        $status=$Demande->status;
        $user=auth()->user()->username;
        //   Mail::to($Demande->user->email)->send(new NotifyDemande($user , $status));
        return redirect()->back();
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //      Demande::destroy($id);
    //      return redirect()->back()->with('message' , 'Your  is deleted successfully');
    // }
}
