<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

// auth
Route::group([
    'namespace' => 'App\Http\Controllers\API\Auth'
], function(){
    Route::post('/register', 'RegisterController@create');
    Route::post('/login', 'LoginController@entry');
    Route::post('/forgot-password', 'LoginController@forgotPassword');
    Route::post('/new-password', 'LoginController@newPassword');
});

// customer
Route::group([
    'middleware' => 'auth:sanctum',
    'namespace' => 'App\Http\Controllers\API\Customer',
    'prefix' => 'customer'
], function(){
    Route::get('/profile', 'ProfileController@show');
});