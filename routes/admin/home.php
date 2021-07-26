<?php

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');

