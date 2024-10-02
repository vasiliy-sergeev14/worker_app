<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\Http\Controllers\WorkerController::class, 'index'])->name('worker.index');
Route::get('/workers/create', [\App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');
Route::get('/workers/{worker}', [\App\Http\Controllers\WorkerController::class, 'show'])->name('worker.show');
Route::get('/workers/{worker}/edit', [\App\Http\Controllers\WorkerController::class, 'edit'])->name('worker.edit');
Route::post('/workers', [\App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
Route::patch('/workers/update/{worker}', [\App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');
Route::delete('/workers/delete/{worker}', [\App\Http\Controllers\WorkerController::class, 'delete'])->name('worker.delete');

