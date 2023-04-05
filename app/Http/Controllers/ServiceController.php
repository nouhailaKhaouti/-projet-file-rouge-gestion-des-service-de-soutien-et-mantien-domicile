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
        $Service = Service::all();
        return response()->json(['response'=>'success','categories'=>$Service]);
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
        $data = Service::create($request->all());
        return response()->json(['created'=>'Service created successfuly','Service'=>$data],201);
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!Service::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return Service::find($id);
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
        return $Service_update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Service::destroy($id);
    }
}