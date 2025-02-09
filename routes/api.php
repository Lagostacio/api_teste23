<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\MonstersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);

Route::get('test', [AuthController::class, 'test']);

Route::get('monsters', [MonstersController::class, 'list']);
