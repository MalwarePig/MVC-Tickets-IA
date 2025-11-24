<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\userController;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('Home.index');
});

/* Route::get('/login', function () {
    return view('Login.Login');
});
 */

Route::get('/login', [userController::class, 'index']);
Route::post('/login', [userController::class, 'Confirmacion']);

Route::get('/tasks', [TasksController::class, 'index']);
