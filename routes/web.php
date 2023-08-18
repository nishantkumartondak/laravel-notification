<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\SMSController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login-email', [EmailController::class, 'login']);
Route::get('/logout-email', [EmailController::class, 'logout']);


Route::get('/login-sms', [SMSController::class, 'login']);
Route::get('/logout-sms', [SMSController::class, 'logout']);
