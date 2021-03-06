<?php

use App\Http\Controllers\Api\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TodolistController::class)->group(function () {
    Route::get('/todos', 'getTodos');
    Route::post('/todos', 'storeTodo');
    Route::put('/todos/done/{id}', 'isDone');
    Route::put('/todos/{id}', 'updateTodo');
    Route::delete('/todos/{id}', 'deleteTodo');
});
