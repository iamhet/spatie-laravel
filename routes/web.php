<?php

use App\Http\Controllers\action;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create',[action::class,'create']);
Route::post('/add',[action::class,'operationCreate']);
Route::get('/edit/{id}',[action::class,'edit']);
Route::post('/update',[action::class,'update']);
Route::get('/delete/{id}',[action::class,'destroy']);
