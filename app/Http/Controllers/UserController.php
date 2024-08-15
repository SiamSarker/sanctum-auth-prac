<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function createUser(Request $request): JsonResponse
    {
        $request->validate([]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'user' => $user,
        ]);

    }
}
