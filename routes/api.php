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
    Route::get('/update-profile', 'ProfileController@updateProfile');
    Route::get('/banner', 'PacketController@banner');
    Route::get('/categories', 'CategoryController@show');
    Route::get('/recomendation', 'RestaurantController@showRecomendation');
    Route::get('/recomendation/{packetId}', 'RestaurantController@showPacketMenu');
    Route::get('/discount', 'PacketController@getPacketDiscount');
    // order
    Route::post('/order/{customerId}', 'OrderController@createOrder');
    Route::get('/order/progress/{customerId}', 'OrderController@orderProgress');
    Route::get('/order/history/{customerId}', 'OrderController@orderHistory');
});

// merchant
Route::group([
    'middleware' => 'auth:sanctum',
    'namespace' => 'App\Http\Controllers\API\Merchant',
    'prefix' => 'merchant'
], function(){
    Route::get('/incoming-order', 'OrderController@getIncomingOrder');
    Route::get('/inprogress-order', 'OrderController@getOrderInProgress');
    Route::get('/accept-order/{orderId}', 'OrderController@acceptIncomingOrder');
    Route::post('/create-packet', 'OrderController@createPacket');
    Route::post('/create-packet-menu', 'OrderController@createPacketMenu');
    Route::get('/packets', 'OrderController@showMyPacket');
    Route::post('/packets/{packetId}', 'OrderController@updatePacket');
    Route::get('/packet-menu/{packetId}', 'OrderController@getPacketMenu');
    Route::get('/enable-packet/{packetId}', 'OrderController@enablePacket');
    Route::get('/disable-packet/{packetId}', 'OrderController@disablePacket');
    // profile merchant
    Route::post('/update-profile', 'ProfileController@updateProfile');
    Route::get('/profile', 'ProfileController@showProfile');
    Route::get('/profile-restaurant', 'ProfileController@showMerchantProfile');
});
