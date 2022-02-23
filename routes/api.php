<?php

use App\Http\Controllers\Users\GetUsersController;
use App\Http\Controllers\Users\PatchUserDetailsController;
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

Route::prefix('/users')->group(function() {
    Route::get('/', GetUsersController::class);
    Route::patch('/{userId}/details', PatchUserDetailsController::class);
});
