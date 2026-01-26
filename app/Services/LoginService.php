<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function login(array $data){
        $email = $data['email'];
        $password = $data['password'];

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $user = Auth::user();
        $tokenResult = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $tokenResult,
            'message' => 'Logged in successfully',
        ] , 200);
    }
}
