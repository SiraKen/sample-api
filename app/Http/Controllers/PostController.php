<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function getPost($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function updatePost($id, Request $request)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function deletePost($id)
    {
        Post::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

}
