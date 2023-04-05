<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CheckListRequest;

class CheckListController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $CheckList = CheckList::all();
        return response()->json(['response'=>'success','checkLists'=>$CheckList]);
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
        $data = CheckList::create($request->all());
        return response()->json(['created'=>'CheckList created successfuly','CheckList'=>$data],201);
    }

    /* Display the specified resource.
     */
    public function show($id)
    {
        if(!CheckList::find($id)){
            return response()->json(['response'=>'not found'],404);
        }
        // return response()->json(['response'=>'not found'],404);
        return CheckList::find($id);
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
        $CheckList_update = CheckList::find($id);
        $CheckList_update->update($request->all());
        return $CheckList_update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return CheckList::destroy($id);
    }
}