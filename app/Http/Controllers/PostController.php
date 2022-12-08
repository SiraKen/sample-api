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

        if (!$post) {
            return response()->json(null, 500);
        }

        return response()->json($post, 201);
    }

    public function updatePost($id, Request $request)
    {
        $post = Post::findOrFail($id);

        if ($post->update($request->all())) {
            return response()->json($post, 200);
        }

        return response()->json(null, 500);
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);

        if ($post->delete()) {
            return response()->json(null, 204);
        }

        return response()->json(null, 500);
    }
}
