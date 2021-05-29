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

Route::get('/', function () {
    return view('index0082');
});

Route::get('/databuku', 'App\Http\Controllers\MainControll@databuku');
Route::get('/databuku2', 'App\Http\Controllers\MainControll@databuku2');
Route::get('/datapeminjam', 'App\Http\Controllers\MainControll@datapeminjam');
Route::get('/datapeminjam2', 'App\Http\Controllers\MainControll@datapeminjam2');
