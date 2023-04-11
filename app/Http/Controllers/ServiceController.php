<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('Admin.Services.service', compact('services'));
    }

    /* Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /* Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->back();
    }

    /* Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /* Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $Service_update = Service::find($id);
        $Service_update->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Service::destroy($id);
         return redirect()->back();
    }
}