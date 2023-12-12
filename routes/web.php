<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


Route::get('/form', [Controllers\UserControllers\UserFormController::class, 'index']);
Route::post('/form', [Controllers\UserControllers\UserFormController::class, 'save_user']);
Route::get('/users', [Controllers\UserControllers\UserInfoController::class, 'index']);


Route::get("/books", [Controllers\BookControllers\BookController::class, 'index']);
Route::post("/create/book", [Controllers\BookControllers\BookController::class, 'create']);
Route::post("/edit/book", [Controllers\BookControllers\BookController::class, 'edit']);





