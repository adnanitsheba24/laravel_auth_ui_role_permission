<?php

use Illuminate\Support\Facades\Auth;
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


// Auth Section Route
Auth::routes();



// User Section Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Admin Section Route
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth','role:admin'])->name('admin.index');
