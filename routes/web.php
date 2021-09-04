<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', [FileController::class, 'index']);
Route::post('dropzone/store', [FileController::class, 'store'])->name('dropzone.store');;
