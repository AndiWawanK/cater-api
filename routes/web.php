<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// dashboard

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/home', function(){
        return view('admin.pages.home');
    });

});


// landing page
Route::get('/', function(){
    return view('frontend.pages.home');
});
Route::get('/contact', function(){
    return view('frontend.pages.contact');
});
Route::get('/registration-merchant', function(){
    return view('frontend.pages.registration');
});