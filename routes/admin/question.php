<?php

//Question Routes
Route::prefix('question')->name('question.')->group(function () {
    Route::get('/list', [App\Http\Controllers\Admin\QuestionController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Admin\QuestionController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Admin\QuestionController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\QuestionController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\QuestionController::class, 'update'])->name('update');
    Route::any('/destroy/{id}', [App\Http\Controllers\Admin\QuestionController::class, 'destroy'])->name('destroy');
});
