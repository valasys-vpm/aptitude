<?php

//User Routes
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/list', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
    Route::any('/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('destroy');
});