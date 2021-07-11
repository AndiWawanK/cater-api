<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\RegistrantController;
use App\Http\Controllers\frontend\RegisterController;
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
Route::group([
    'prefix' => 'dashboard',
    'namespace' => 'App\Http\Controllers\admin'
], function(){
    Route::get('/', function(){
        return view('admin.pages.home');
    });
    Route::get('/registrant', [RegistrantController::class, 'show']);
    Route::get('/merchant-registered', [RegistrantController::class, 'registered']);
    Route::get('/customer', [RegistrantController::class, 'customer']);
    Route::get('/verification/{merchantId}', [RegistrantController::class, 'verificationRegistrant']);
    Route::get('/disable/{merchantId}', [RegistrantController::class, 'disableAccountRegistrant']);

});


// landing page
Route::get('/', function(){
    return view('frontend.pages.home');
});
Route::get('/contact', function(){
    return view('frontend.pages.contact');
});
Route::get('/registration-merchant', [RegisterController::class, 'index'])->name('registration.merchant');
Route::POST('/register', [RegisterController::class, 'handleRegister']);