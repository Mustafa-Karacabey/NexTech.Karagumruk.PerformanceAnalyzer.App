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

Route::get('/testsonuclari',[\App\Http\Controllers\SearchController::class, 'index'])->name('test');

Route::get('/search',[\App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/testgir',[\App\Http\Controllers\SearchController::class, 'index'])->name('testgir');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

