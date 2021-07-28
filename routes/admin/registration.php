<?php

//Registration Routes
Route::prefix('registration')->name('registration.')->group(function () {
    Route::get('/list', [App\Http\Controllers\Admin\RegistrationController::class, 'index'])->name('index');
    Route::get('/show/{id}', [App\Http\Controllers\Admin\RegistrationController::class, 'show'])->name('show');
    // Route::get('/create', [App\Http\Controllers\Admin\RegistrationController::class, 'create'])->name('create');
    // Route::post('/store', [App\Http\Controllers\Admin\RegistrationController::class, 'store'])->name('store');
    //Route::get('/edit/{id}', [App\Http\Controllers\Admin\RegistrationController::class, 'edit'])->name('edit');
    // Route::post('/update/{id}', [App\Http\Controllers\Admin\RegistrationController::class, 'update'])->name('update');
    // Route::any('/destroy/{id}', [App\Http\Controllers\Admin\RegistrationController::class, 'destroy'])->name('destroy');
});