<?php

use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ImageUploadController;

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
    return view('index');
});

Route::get('/form', function() {
    return view('form');
});

Route::post('/result', [MathController::class,'calc_result']);

Route::get('/form-upload', function() {
    return view('form-upload');
});

Route::post('/upload-status',[ImageUploadController::class,'upload']);