<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use Illuminate\Http\Request;

class TelephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Telephone $telephone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telephone $telephone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $Telephone_update = Telephone::find($id);
        $Telephone_update->update($request->all());
        return redirect()->back()->with('message' , 'Your Company telephone is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Telephone::destroy($id);
        return redirect()->back()->with('message' , 'this company telephone is deleted successfully');
    }
}
