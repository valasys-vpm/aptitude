<?php

//Designation Routes
Route::prefix('designation')->name('designation.')->group(function () {
    Route::get('/list', [App\Http\Controllers\Admin\DesignationController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Admin\DesignationController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Admin\DesignationController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\DesignationController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\DesignationController::class, 'update'])->name('update');
    Route::any('/destroy/{id}', [App\Http\Controllers\Admin\DesignationController::class, 'destroy'])->name('destroy');
});
