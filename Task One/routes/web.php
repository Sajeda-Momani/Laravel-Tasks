<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// // Route::view('path', 'file name in views');

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::view('/',"welcome");
// Route::get('/new', function () {
//     return view('Make first file');
// });
// // Route::view('new',"Make first file");
// Route::get('/tell', function () {
//     return view('about');
// });
// // Route::view('tell',"about");

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/check', [LoginController::class, 'index'])->name('LoginController');
