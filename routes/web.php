<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {return view("index");});


Route::post("/signin_valid", [UserController::class, "signin_valid"]);
Route::get("/reg", [UserController::class, "signup"]);
Route::post("/signup_valid", [UserController::class, "signup_valid"]);


Route::post("/post_create", [PostController::class, "post_create"]);
Route::get("/main", [PostController::class, "posts"]);
Route::get("/post_update/{id}", [PostController::class, "post_page"]) ->name("post_update");
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get("/profile", [ProfileController::class, "profile"])->name("profile");
