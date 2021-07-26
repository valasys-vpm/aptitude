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

//Frontend Routes
include('frontend/frontend_routes.php');

Auth::routes();

//Admin-Home Routes
include('admin/home.php');

//Admin-Designation Routes
include('admin/designation.php');

//Admin-Question Routes
include('admin/question.php');




//Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
Route::get('/upload-file', [App\Http\Controllers\Admin\HomeController::class, 'upload_file'])->name('upload_file');
Route::post('/upload-file-store', [App\Http\Controllers\Admin\HomeController::class, 'upload_file_store'])->name('upload_file_store');

Route::post('projects/importProject', [ProjectController::class, 'importProject'])->name('importProject');

Route::resource('projects', ProjectController::class);
