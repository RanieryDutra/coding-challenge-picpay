<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|   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

| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
