<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function(){
    return view('landingpage');
});

Route::get('/register', [AuthController::class, 'registrationForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);  
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [ItemController::class, 'index'])->middleware('auth');
Route::get('/dashboard/create', [ItemController::class, 'create'])->middleware('auth');
Route::post('/dashboard/create', [ItemController::class, 'insert'])->middleware('auth');
Route::get('/dashboard/edit/{item}', [ItemController::class, 'edit'])->middleware('auth');
Route::patch('/dashboard/edit/{item}', [ItemController::class, 'update'])->middleware('auth');
Route::get('/dashboard/delete/{item}', [ItemController::class, 'delete'])->middleware('auth');
Route::delete('/dashboard/delete/{item}', [ItemController::class, 'destroy'])->middleware('auth');