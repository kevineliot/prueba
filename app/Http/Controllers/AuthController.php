<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $login = $request->validate( [
            'email'=>'required|string',
            'password'=>'required|string'
        ]);

        if(!Auth::attempt($login)){
            return response(['menssage'=>'invalid login credentials']);
        }

        $accessToken =Auth::user()->createToken('authToken')->accessToken;
        return response(['user'=>Auth::user(),'access_token'=> $accessToken]);
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required', 
           // 'c_password' => 'required|same:password', 
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
