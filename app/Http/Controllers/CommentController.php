<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function getComment($id)
    {
        return Comment::findOrFail($id);
    }

    public function createComment(Request $request)
    {
        $comment = Comment::create($request->all());

        if (!$comment) {
            return response()->json(null, 500);
        }

        return response()->json($comment, 201);
    }

    public function updateComment($id, Request $request)
    {
        $comment = Comment::findOrFail($id);

        if ($comment->update($request->all())) {
            return response()->json($comment, 200);
        }

        return response()->json(null, 500);
    }

    public function deleteComment($id)
    {
        $comment = Comment::findOrFail($id);

        if ($comment->delete()) {
            return response()->json(null, 204);
        }

        return response()->json(null, 500);
    }
}
