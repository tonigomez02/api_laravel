<?php

use App\Http\Controllers\api\EventsController;
use App\Http\Controllers\api\MoviesController;
use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\UsersController;
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

Route::apiResource("movies", MoviesController::class);
Route::apiResource("events", EventsController::class);
Route::apiResource("news", NewsController::class);
Route::apiResource("users", UsersController::class);
