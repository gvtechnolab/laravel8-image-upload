<?php

use App\Http\Controllers\imageuploadcontroller;
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


Route::get('/', [imageuploadcontroller::class, 'index']);
Route::post('save', [imageuploadcontroller::class, 'imageupload']);