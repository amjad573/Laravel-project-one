<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site1Controller;
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


Route::prefix('site1')->name('site1.')->group(function () {

    Route::get('/', [Site1Controller::class, 'index'])->name('index');
    Route::get('/about', [Site1Controller::class, 'about'])->name('about');
    Route::get('/post', [Site1Controller::class, 'post'])->name('post');
    Route::get('/contact', [Site1Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Site1Controller::class, 'contact-data'])->name('contact-data');
});

Route::prefix('site2')->name('site2.')->group(function () {
    Route::get('/', [Site2Controller::class, 'index'])->name('index');
    Route::get('/features', [Site2Controller::class, 'features'])->name('features');
    Route::get('/download', [Site2Controller::class, 'download'])->name('download');
    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Site2Controller::class, 'contact-data'])->name('contact_data');
});

Route::get('form1', [FormsController::class, 'form1'])->name('form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');

Route::get('form2', [FormsController::class, 'form2'])->name('form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');

Route::get('form3', [FormsController::class, 'form3'])->name('form3');
Route::post('form3', [FormsController::class, 'form3_data'])->name('form3_data');

Route::get('form4', [FormsController::class, 'form4'])->name('form4');
Route::post('form4', [FormsController::class, 'form4_data'])->name('form4_data');

Route::get('post', [PostsController::class, 'index'])->name('post');
