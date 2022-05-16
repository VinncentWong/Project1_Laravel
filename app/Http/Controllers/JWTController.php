<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JWTController extends Controller
{
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $jwtToken = JWTAuth::attempt($validate);
        if(!$jwtToken){
            return response()->json([
                'email' => $validate['email'],
                'password' => $validate['password'],
                'message' => 'unauthorized !',
                'value' => JWTAuth::attempt($validate),
            ], 401);
        }
        return response()->json([
                'message' => 'success',
                'token' => $jwtToken
        ]);
    }
}
