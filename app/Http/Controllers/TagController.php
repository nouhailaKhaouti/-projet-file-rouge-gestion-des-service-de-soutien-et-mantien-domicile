<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $Tag = Tag::all();
        return response()->json(['response'=>'success','categories'=>$Tag]);
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
        $data = Tag::create($request->all());
        return response()->json(['created'=>'Tag created successfuly','Tag'=>$data],201);
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!Tag::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return Tag::find($id);
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
        $Tag_update = Tag::find($id);
        $Tag_update->update($request->all());
        return $Tag_update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Tag::destroy($id);
    }
}