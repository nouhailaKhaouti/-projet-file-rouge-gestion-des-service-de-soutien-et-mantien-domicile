<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CheckListRequest;
use Illuminate\Support\Facades\Auth;

class CheckListController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $CheckLists = Auth::user()->checkLists;
        return view('User.ckeckList',compact('CheckLists'));
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
        return redirect()->back()->with('message' , 'Your checkList is created successfully');

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
        return redirect()->back()->with('message' , 'Your checkList is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CheckList::destroy($id);
        return redirect()->back()->with('message' , 'Your checkList is deleted successfully');

    }
}