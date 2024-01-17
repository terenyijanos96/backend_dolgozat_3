<?php

use App\Http\Controllers\UpperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('uppers', [UpperController::class, 'index']);
Route::get('uppers/{id}', [UpperController::class, 'show']);
Route::post('uppers', [UpperController::class, 'store']);
Route::put('uppers/{id}', [UpperController::class, 'update']);
Route::delete('uppers/{id}', [UpperController::class, 'destroy']);
