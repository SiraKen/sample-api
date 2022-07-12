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
        return response()->json($todo, 201);
    }

    public function updateTodo($id, Request $request)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());
        return response()->json($todo, 200);
    }

    public function deleteTodo($id)
    {
        Todo::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
