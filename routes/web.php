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

Route::group(['prefix' => '/', 'as' => 'home.'], function (){
    Route::get('/', [\App\Http\Controllers\Home\MainController::class, 'index'])->name('index');
    Route::post('/send-email', [\App\Http\Controllers\Home\MainController::class, 'handelSendBusinessMail'])->name('handelSendBusinessMail');
    Route::get('/thank-you', [\App\Http\Controllers\Home\MainController::class, 'thankYouIndex'])->name('thankYouIndex');
});
