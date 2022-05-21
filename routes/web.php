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

Route::view('/admin', 'admin.pages.index');
Route::view('/', 'admin.auth.login');
Route::view('/forgetpass', 'admin.auth.forgetpass');
Route::view('/resetpass', 'admin.auth.resetpass');
Route::view('/index', 'client.pages/index');
Route::view('/', 'admin.pages.index');
Route::view('/login', 'admin.auth.login');
Route::view('/register', 'admin.auth.register');
