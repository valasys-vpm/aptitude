<?php

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

//Registration Routes
Route::prefix('aptitude')->name('aptitude.')->group(function () {

    Route::get('/register', [App\Http\Controllers\Frontend\RegistrationController::class, 'register'])->name('register');
    Route::post('/register-submit', [App\Http\Controllers\Frontend\RegistrationController::class, 'register_submit'])->name('register.submit');

    Route::get('/instruction', [App\Http\Controllers\Frontend\RegistrationController::class, 'instruction'])->name('instruction');
    Route::post('/start-test', [App\Http\Controllers\Frontend\TestController::class, 'start_test'])->name('start_test');

    Route::get('/test', [App\Http\Controllers\Frontend\TestController::class, 'test'])->name('test.index');

    Route::post('/test-submit', [App\Http\Controllers\Frontend\TestController::class, 'test_submit'])->name('test.submit');

    Route::get('/result', [App\Http\Controllers\Frontend\TestController::class, 'test_result'])->name('test.result');

});


