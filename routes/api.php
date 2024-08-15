<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/user-test', function (Request $request) {
    return ['hi' => 'test'];
});

Route::post('/register', [UserController::class, 'createUser']);
