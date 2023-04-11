<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /* Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.category.category', compact('categories'));
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
        $data = Category::create($request->all());
        return redirect()->back();
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
        $category_update = Category::find($id);
        $category_update->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Category::destroy($id);
         return redirect()->back();
    }
}