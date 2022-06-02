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
Route::prefix('admin')->group(function () {
    Route::middleware('adminLogin')->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
        Route::post('/login-process', [\App\Http\Controllers\Admin\AuthController::class, 'loginProcess'])->name('admin.login.process');
        Route::get('/forgot-password', [\App\Http\Controllers\Admin\AuthController::class, 'forgot'])->name('admin.forgot');
        Route::post('/forgot-password-process', [\App\Http\Controllers\Admin\AuthController::class, 'forgotPassword'])->name('admin.forgot.pass');
        Route::get('/reset-password/{token}', [\App\Http\Controllers\Admin\AuthController::class, 'reset'])->name('admin.reset');
        Route::post('/reset-password-process', [\App\Http\Controllers\Admin\AuthController::class, 'resetPassword'])->name('admin.reset.pass');
    });
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('/agency', \App\Http\Controllers\Admin\AgencyController::class)->except('show');
        Route::resource('/agent', \App\Http\Controllers\Admin\AgentController::class)->except('show');
        Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
    });
});

// Route::view('/admin', 'admin.pages.index');
// Route::view('/', 'admin.auth.login');
// Route::view('/forgetpass', 'admin.auth.forgetpass');
// Route::view('/resetpass', 'admin.auth.resetpass');
Route::view('/', 'client.pages/index');
// Route::view('/', 'admin.pages.index');
// Route::view('/login', 'admin.auth.login');
Route::view('/register', 'admin.auth.register');
Route::view('/agency', 'admin.pages.agency');
Route::view('/agent', 'admin.pages.agent');
Route::view('/vistor', 'admin.pages.vistor');
Route::view('/addagency', 'admin.pages.addagency');
