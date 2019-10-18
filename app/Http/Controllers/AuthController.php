<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    // register function
    public function register(Request $request){
        // validation instance
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
        // *if you want a confirmed password field 
            // 'password' => 'required|confirmed'     
        ]);

        // encryption of password
        $validatedData['password'] = bcrypt($request->password);
    
        // User model instance
        $user = User::create($validatedData); 
    
        // generation of access token
        $accessToken = $user->createToken('authToken')->accessToken;
    
        // returning the response
        return response([
        // this will hold our user object
            // 'user' => $user,
            // this will hold our token
            'access_token' => $accessToken
        ]);
    }



    // login function
    public function login(Request $request){
        // CHECKS FOR CREDENTIALS WITH ACTIVE STATUS
        $credentials = array(
            // 'email' => $request->get('email'), // *IF YOU WANT TO USE EMAIL AS MAIN
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'active' => 1
        );

        // // check if the data is valid
        // if the attempt login is not valid then
        if(!auth()->attempt($credentials)){
            
            return response([
        // return an error response
                'message' => 'Invalid credentials',
                'status' => 'FAIL'
            ]);
        }

        // if valid then
        // generate the token
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        
        // return a response with
        return response([
            // generated token
            'access_token' => $accessToken,
            'status' => 'OK'
        ]);
    }

    // getting the authenticated user details
    public function profile(){
        // using the auth() helper we are returning the authenticated user info
        return auth('api')->user();
    }


    

    
}
