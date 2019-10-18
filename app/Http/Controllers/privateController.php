<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privateController extends Controller
{
    function getPrivateMsg(){
        return "Hey I am a private data";
    }
}
