<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [SiteController::class, 'Home'])->name('home');
Route::get('/about', [SiteController::class, 'About'])->name('about');
Route::get('/contact/{name}', [SiteController::class, 'Contact'])->name('contact');
Route::get('/service', [SiteController::class, 'Service'])->name('service');
