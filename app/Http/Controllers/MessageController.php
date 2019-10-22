<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function post(Request $request){
         // validation instance
        
        $validatedData = $request->validate([
            'email' => 'email|required',
            'message' => 'required|min:5',     
        ]);
        
        // User model instance
        $message = Message::create($validatedData); 

        return response([
            'message' => $message,
            'status' => 'OK'
        ]);

    }
}
