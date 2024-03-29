<?php

namespace App\Http\Controllers;

use App\Models\Disponibility;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class DisponibilityController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $Disponibility = Disponibility::all();
        return response()->json(['response'=>'success','categories'=>$Disponibility]);
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
        $data = Disponibility::create($request->all());
        return redirect()->back()->with('message' , 'working day list is created successfully');
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!Disponibility::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return Disponibility::find($id);
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
        $Disponibility_update = Disponibility::find($id);
        $Disponibility_update->update($request->all());
        return redirect()->back()->with('message' , 'your working day list is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Disponibility::destroy($id);
         return redirect()->back()->with('message' , 'working day list is deleted successfully');
    }
}