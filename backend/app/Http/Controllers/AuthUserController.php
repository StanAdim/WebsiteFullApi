<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('randomToken')->plainTextToken;
        return response()->json(['message' => 'Registration successful', 'token'=> $token, 'user' => $user]);
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        //Checking User
        $user = User::where('email',$credentials['email'])->first();
        if (!$user || !Hash::check($credentials['password'],$user->password)) {
            return response([
                'message'=> 'Wrong credentials'
            ],402);
        }
        $token = $user->createToken('randomToken')->plainTextToken;
        return response()->json(['message' => 'Registration successful', 'token'=> $token, 'user' => $user]);
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Logout successful']);
    }
}
