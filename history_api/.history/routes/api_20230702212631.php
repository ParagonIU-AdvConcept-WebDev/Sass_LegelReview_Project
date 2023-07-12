<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\ContactController;
use App\Http\Controller\DashboardController;
use App\Http\Controller\FirmController;
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

/* Login */
//http://127.0.0.1:8000/api/login
Route::post('/login', [AuthenticatedSessionController::class,'store']);

/* Register */
//http://127.0.0.1:8000/api/register
Route::post('/register', [ConfirmablePasswordController::class, 'store']);

/* Contact */
//http://127.0.0.1:8000/api/contact-data
Route::post('/contact-data', [ContactController::class, 'storeData']);
//http://127.0.0.1:8000/api/contact-form
Route::get('/contact-form',[ContactController::class, 'showData']);

//http://127.0.0.1:8000/api/
Route::put('/firms/{id}', [FirmController::class, 'updateFirm'])->name('firm.update');
Route::get('/firms/{id}/edit', [FirmController::class, 'editFirm'])->name('firm.edit');


