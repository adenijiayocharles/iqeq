<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        return JWTAuth::attempt($credentials);
    }

    public function register(Request $request)
    {
        $user = User::create($request->all());
        // generate json token and return
        return JWTAuth::fromUser($user);
    }
}
