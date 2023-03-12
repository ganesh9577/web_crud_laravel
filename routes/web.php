<?php

use App\Http\Controllers\studentcontroller;
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

Route::get('/register', function () {
    return view('register');
});

Route::get("/show",[studentcontroller::class,"index"]);

// Route::view("showdata","showdata");
Route::get("/showlist",[studentcontroller::class,"list"]);
Route::get("/delete/{id}",[studentcontroller::class,"delete"]);
Route::get("/update/{id}",[studentcontroller::class,"foredit"]);
Route::post("/edit/{id}",[studentcontroller::class,"update"]);






?>