<?php

namespace App\Http\Controllers;

use App\Mail\NotifyDemande;
use App\Models\CheckList;
use App\Models\Demande;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $count = Demande::where('jour', $request->jour)
            ->where('provider_id', $request->provider)
            ->count();
        if ($count == 0) {
            $price = 0;
            $checkLists = $request->input('checkLists', []);
            foreach ($checkLists as $checkList) {
                $value = CheckList::find($checkList);
                $price += $value->price;
            }
            $demande = new Demande();
            $demande->title = $request->title;
            $demande->description = $request->description;
            $demande->price = $price;
            $demande->jour = $request->jour;
            $demande->type = $request->type;
            $demande->city = $request->city;
            $demande->adresse = $request->adresse;
            $demande->service_id = $request->service;
            $demande->provider_id = $request->provider;
            $demande->user_id = $request->user;
            $demande->save();
            $demande->checkLists()->attach($checkLists);
            $name = auth()->user()->name;
            $status = $demande->status;
            $message="the client ".$name." has sended you a new request the ".optional($demande->created_at)->format('d/m/Y');
            $subject='New request status';
            Mail::to($demande->provider->email)->send(new NotifyDemande( $name, $status,$message,$subject,true));
            return redirect()->back()->with('message', 'Your demande has been send successfully');
        } else {
            return redirect()->back()->with('message', 'failed to send your demande because the day you selected is already reserved');
        }
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
    public function update(Request $request, $id)
    {
        //
        $price = 0;
        $checkLists = $request->input('checkLists', []);
        foreach ($checkLists as $checkList) {
            $value = CheckList::find($checkList);
            $price += $value->price;
        }
        $demande = Demande::find($id);
        $demande->title = $request->title;
        $demande->description = $request->description;
        $demande->price = $price;
        $demande->jour = $request->jour;
        $demande->type = $request->type;
        $demande->city = $request->city;
        $demande->adresse = $request->adresse;
        $demande->service_id = $request->service;
        $demande->provider_id = $request->provider;
        $demande->user_id = $request->user;
        $demande->update();
        $demande->checkLists()->attach($checkLists);
    }

    public function approved_Demande($id)
    {
        $Demande = Demande::find($id);
        $Demande->status = 'accepted';
        $Demande->save();
        $status = $Demande->status;
        $name = auth()->user()->name;
        $message="the service provider ".$Demande->provider->name." that you choosed has updated your request the ".optional($Demande->updated_at)->format('d/m/Y');
        $subject='Your request status has been updated';
        Mail::to($Demande->user->email)->send(new NotifyDemande( $name, $status,$message,$subject));
        return redirect()->back();
    }
    public function refused_Demande($id)
    {
        $Demande = Demande::find($id);
        $Demande->status = 'refused';
        $Demande->save();
        $status = $Demande->status;
        $user = auth()->user()->name;
        //   Mail::to($Demande->user->email)->send(new NotifyDemande($user , $status));
        return redirect()->back();
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $demande = Demande::find($id);
        if ($demande->status == 'accepted') {
            // The demande with the given ID does not exist
            return redirect()->back()->with('message', 'sorry to informe you that You no longer have the right to delete this request , because the provider has alredy accepted your request');
            // Handle the error or show a message to the user
            // Convert the day attribute to a DateTime object
        } else {

            $demandeDay = new DateTime($demande->day);

            // Get the current date and subtract one day
            $deleteDay = (new DateTime())->modify('-1 day');

            if ($demandeDay > $deleteDay) {
                // The current date is before  the day of the demande by at least one day
                $demande->delete();
                $message = "the client" . auth()->user()->name . "has deleted his demande that was placed the" . optional($demande->created_at)->format('d/m/Y') . "and supposed to be done the" . $demande->jour;
                $name = $demande->provider->name;
                $status='deleted';
                $subject="a client request has been deleted";
                Mail::to($demande->provider->email)->send(new NotifyDemande( $name,$status,$message,$subject,true));
                return redirect()->back()->with('message', 'Your  is deleted successfully');
                // You can safely delete the demande

            } else {
                // The current date is on or after the day of the demande
                return redirect()->back()->with('message', 'You no longer have the right to delete this request , check the date of your request if it is on or after the day you selected in the request');
                // You should not delete the demande
                // Handle the error or show a message to the user
            }
        }
    }
}
