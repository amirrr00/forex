<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
	return view('home');
});
Route::get('/template', function () {
	return view('home_temp');
});
Route::get('/forex',[MainController::class, 'showForex'])->name('forex_show');
Route::get('/crypto',[MainController::class, 'showCrypto'])->name('crypto_show');
Route::get('/charts/{nick_name}',[MainController::class, 'showChart'])->name('chart_show');

