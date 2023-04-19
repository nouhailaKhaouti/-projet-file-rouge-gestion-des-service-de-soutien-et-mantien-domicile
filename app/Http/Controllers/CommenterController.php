<?php

namespace App\Http\Controllers;

use App\Models\Commenter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CommenterRequest;
use Illuminate\Support\Facades\Auth;

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
        $comment = Commenter::create($request->all());
        $post = $comment->post;
        $user = $comment->user;
        if ($comment->commenter_id != null) {
            return response()->json([
                'id' => $comment->id,
                'description' => $comment->description,
                'created_at' => $comment->created_at->format('Y-m-d H:i:s'),
                'parent'=>$comment->commenter_id,
                'auth' => Auth::user()->id,
                'state' => 0,
                'post' => [
                    'id' => $post->id,
                    'created_at' => $post->created_at->format('Y-m-d H:i:s'),
                ],
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'created_at' => $user->created_at->format('Y-m-d H:i:s'),
                ],
            ]);

        } else {
            return response()->json([
                'id' => $comment->id,
                'description' => $comment->description,
                'created_at' => $comment->created_at->format('Y-m-d H:i:s'),
                'auth' => Auth::user()->id,
                'count' => count($comment->replies),
                'state' => 1,
                'post' => [
                    'id' => $post->id,
                    'created_at' => $post->created_at->format('Y-m-d H:i:s'),
                ],
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'created_at' => $user->created_at->format('Y-m-d H:i:s'),
                ],
            ]);
        }
    }


    /* Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /* Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $comment = Commenter::find($id);
        $comment->update($request->all());
        $post = $comment->post;
        $user = $comment->user;
            return response()->json([
                'id' => $comment->id,
                'description' => $comment->description,
                'created_at' => $comment->created_at->format('Y-m-d H:i:s'),
                'auth' => Auth::user()->id,
                'post' => [
                    'id' => $post->id,
                ],
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                ],
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commenter::destroy($id);
        return response()->json(['success' => 'removed successfully'], 200);
    }
}
