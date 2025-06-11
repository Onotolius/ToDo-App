<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name("tasks.index");
Route::post('/tasks/store', [TaskController::class, 'store'])->name("tasks.store");
Route::get('/tasks/create', [TaskController::class, 'create'])->name("tasks.create");
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name("tasks.show");
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
Route::post('/tasks/{id}/done', [TaskController::class, 'markAsDone'])->name('tasks.done');
Route::put('/tasks/{id}/update', [TaskController::class, 'update'])->name("tasks.update");
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
