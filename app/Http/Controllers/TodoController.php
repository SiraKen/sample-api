<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function getTodo($id)
    {
        return Todo::findOrFail($id);
    }

    public function createTodo(Request $request)
    {
        $todo = Todo::create($request->all());

        if (!$todo) {
            return response()->json(null, 500);
        }

        return response()->json($todo, 201);
    }

    public function updateTodo($id, Request $request)
    {
        $todo = Todo::findOrFail($id);

        if ($todo->update($request->all())) {
            return response()->json($todo, 200);
        }

        return response()->json(null, 500);
    }

    public function deleteTodo($id)
    {
        $todo = Todo::findOrFail($id);

        if ($todo->delete()) {
            return response()->json(null, 204);
        }

        return response()->json(null, 500);
    }
}
