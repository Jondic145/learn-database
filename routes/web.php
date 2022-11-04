<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', [App\Http\Controllers\EmployeesController::class, 'index']);
// Route::get('/insert', [App\Http\Controllers\EmployeesController::class, 'insert']);
Route::get('/insert', [App\Http\Controllers\BookController::class, 'insert']);
Route::get('/update', [App\Http\Controllers\BookController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\BookController::class, 'delete']);
Route::get('/select', [App\Http\Controllers\BookController::class, 'select']);


