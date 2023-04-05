<?php

namespace App\Http\Controllers;

use App\Models\Commenter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CommenterRequest;

class CommenterController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $Commenter = Commenter::all();
        return response()->json(['response'=>'success','commenters'=>$Commenter]);
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
        $data = Commenter::create($request->all());
        return response()->json(['created'=>'Commenter created successfuly','Commenter'=>$data],201);
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!Commenter::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return Commenter::find($id);
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
        $Commenter_update = Commenter::find($id);
        $Commenter_update->update($request->all());
        return $Commenter_update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Commenter::destroy($id);
    }
}