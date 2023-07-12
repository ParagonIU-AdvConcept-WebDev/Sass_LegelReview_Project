<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//http://127.0.0.1:8000/api/
Route::post('/login', [AuthenticatedSessionController::class,'store']);

//http://127.0.0.1:8000/api/register
Route::post('/register', [ConfirmablePasswordController::class, 'store']);
Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store']);



