<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class LeaveMessageController extends Controller
{
    public function post(Request $request){
         // validation instance
         $validatedData = $request->validate([
            'email' => 'email|required',
            'message' => 'required|min:3'     
        ]);
        $message = Message::create($validatedData);

        return redirect('/message');

    }
}
