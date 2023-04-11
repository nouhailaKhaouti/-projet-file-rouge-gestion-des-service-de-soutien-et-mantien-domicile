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
        return redirect()->back()->with('message' , 'You added your review successfully');
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
        return redirect()->back()->with('message' , 'your review is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rating::destroy($id);
        return redirect()->back()->with('message' , 'Your review is deleted successfully');
    }
}