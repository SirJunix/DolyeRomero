<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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




Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);



Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function ()
    {
    return view('dashboard');
    })->name('dashboard');

