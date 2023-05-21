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

Route::get('/', [\App\Http\Controllers\ViewController::class, 'index'])
->name('index');

Route::get('/progress', [\App\Http\Controllers\ViewController::class, 'progress'])
->name('progress');

Route::get('/success', [\App\Http\Controllers\ViewController::class, 'success'])
->name('success');

Route::get('/error', [\App\Http\Controllers\ViewController::class, 'error'])
->name('error');


Route::post('/form-data', [\App\Http\Controllers\PostFormController::class, 'formData'])
->name('form.data');