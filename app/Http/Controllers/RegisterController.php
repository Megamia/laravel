<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
    }
    public function register(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json(['message' => 'User registered successfully'], 200);
    }
}
