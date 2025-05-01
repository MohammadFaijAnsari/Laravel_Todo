<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TodoForm');
});
Route::post('/save',[TodoController::class,'savedata'])->name('todo.save');
Route::get('/view',[TodoController::class,'showdata'])->name('todo.show');
Route::get('/delete/{id}',[TodoController::class,'deletedata'])->name('todo.delete');