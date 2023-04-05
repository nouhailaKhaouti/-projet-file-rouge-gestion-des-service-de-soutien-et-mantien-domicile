<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RatingRequest;

class RatingController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $Rating = Rating::all();
        return response()->json(['response'=>'success','ratings'=>$Rating]);
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
        $data = Rating::create($request->all());
        return response()->json(['created'=>'Rating created successfuly','Rating'=>$data],201);
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!Rating::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return Rating::find($id);
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
        $Rating_update = Rating::find($id);
        $Rating_update->update($request->all());
        return $Rating_update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Rating::destroy($id);
    }
}