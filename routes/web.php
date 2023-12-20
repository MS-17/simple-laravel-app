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


Route::get("/books", [Controllers\BookControllers\BookController::class, 'get_books_list']);
Route::get("/create/book", [Controllers\BookControllers\BookController::class, 'get_create_view']);
Route::post("/create/book", [Controllers\BookControllers\BookController::class, 'save_new_book']);
Route::get("/edit/book/{id}", [Controllers\BookControllers\BookController::class, 'get_edit_view']);
Route::post("/edit/book/{id}", [Controllers\BookControllers\BookController::class, 'save_changed_book']);



