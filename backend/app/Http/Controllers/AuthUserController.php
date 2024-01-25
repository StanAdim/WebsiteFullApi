<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthUserController extends Controller
{
    //users
    public function index(){
        $users = User::latest()->get();
        return response()-> json([
            'message'=> 'System Users',
            'data'=> $users
        ]);
    }
    //registration
    public function registerUser(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails())
            {
             return response()->json([
              'message' => 'Validation fails',
              'errors' => $validator->errors()
            ],422);
            }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json(['message' => 'Registration successful', 'token'=> $token, 'user' => $user]);
    }
    //login
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        //Checking User
        $user = User::where('email',$credentials['email'])->first();
        if (!$user || !Hash::check($credentials['password'],$user->password)) {
            return response()->json([
                'message'=> 'Wrong credentials'
            ]);
        }
        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json(['message' => 'Registration successful', 'token'=> $token, 'user' => $user]);
    }
    //Auth user
    public function getAuthUser(){
        $user = Auth::user();
        if($user){
            return response()->json([
                'message'=> 'Logged in user',
                'data'=> $user
            ]);
        }
        return response()->json([
            'message'=> 'Please login first'
        ]);
    }
    //logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'User successfully logged out'
        ], 200);
    }
}
