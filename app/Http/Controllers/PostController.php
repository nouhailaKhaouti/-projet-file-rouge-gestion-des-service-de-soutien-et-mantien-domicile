<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Http\Requests\TagRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = Tag::all();
        $categorys = Category::all();
        $posts = Post::with('tags')->get();
        return view('User.includes.post', compact('posts', 'tags', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $this->authorize('create',Post::class);

        $tags = array();
        foreach ($request->input('tags') as $tag) {
            $data = Tag::firstOrCreate(['label' =>  strtolower($tag)]);
            array_push($tags, $data->id);
        } // get the tags from the request;
        $Post = new Post();
        $Post->user_id = optional(Auth::user())->id;;
        $Post->category_id = $request->category_id;
        $Post->description = $request->description;
        $Post->save();
        try {
            $Post->tags()->attach($tags);
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    //we create a new name for the image 
                    $path = time() . uniqid() . '.' . $image->getClientOriginalExtension();
                    //and after we move it to an other file called doctorimage that will be created automaticly ones we upload the image 
                    $image->move('Postimage', $path);
                    // dd($path);
                    $img = new Image();
                    $img->path = $path;
                    $img->post_id = $Post->id;
                    $img->save();
                    // dd($img);
                }
            }
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'somthing went wrong while creating this post');
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Post = Post::find($id);
        // $this->authorize('update',$Post);
        if (!$Post) {
            return redirect()->back()->with('message', 'Post not found');
        }
        $tags = array();
        foreach ($request->input('tags') as $tag) {
            $data = Tag::firstOrCreate(['label' =>  strtolower($tag)]);
            array_push($tags, $data->id);
        }
        if ($request->input('remove')) {
            foreach ($request->input('remove') as $image) {
                $data = Image::where('path', $image)->first();
                $data->delete();
            }
        }
        $Post->category_id = $request->category_id;
        $Post->description = $request->description;
        $Post->update();
        try {
            // $Post->update($request->all());
            $Post->tags()->sync($tags);
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    //we create a new name for the image 
                    $path = time() . uniqid() . '.' . $image->getClientOriginalExtension();
                    //and after we move it to an other file called doctorimage that will be created automaticly ones we upload the image 
                    $image->move('Postimage', $path);
                    // dd($path);
                    $img = new Image();
                    $img->path = $path;
                    $img->post_id = $Post->id;
                    $img->save();
                    // dd($img);
                }
            }
        } catch (\Exception) {
            return redirect()->back()->with('message', 'Failed to update Post');
        }
        return redirect()->back()->with('message', 'the post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Post = Post::find($id);
        // $this->authorize('delete',$Post);
        $Post->tags()->detach();
        $Post->delete();

        if (!$Post) {
            return redirect()->back()->with('message', 'Post not found');
        }
        return redirect()->back()->with('message', 'Post deleted successfully');
    }


    public function remove_image($id, $path)
    {
        $post = Post::find($id);
        $image = $post->images->where('path', $path)->first();
        if ($image) {
            $image->delete();
            return response()->json(['success' => 'removed successfully'], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
