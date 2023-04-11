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

    /* Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /* Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Commenter::create($request->all());
        return redirect()->back()->with('message' , 'Your commente is created successfully');

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
        return redirect()->back()->with('message' , 'Your commente is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Commenter::destroy($id);
       return redirect()->back()->with('message' , 'Your commente is deleted successfully');

    }
}