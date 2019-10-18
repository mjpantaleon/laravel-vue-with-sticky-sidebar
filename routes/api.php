<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function() {
    // include all the routes that you want to be protected from unauthorized access

    // mock data only
     Route::get('/privateMsg', 'privateController@getPrivateMsg');
});


// our register route: ‘localhost/bobongmd/public/api/register’ 
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/profile', 'AuthController@profile');

Route::post('/message', 'MessageController@post');
