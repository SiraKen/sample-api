<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function getUser($id)
    {
        return User::findOrFail($id);
    }

    public function createUser(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function updateUser($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

}
