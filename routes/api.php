<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;

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
Require __DIR__ . '/api/v2.php';

Route::prefix('auth')->group(function (){
    route::post('/login',LoginController::class)->middleware('guest');
    route::post('/logout',LogoutController::class)->middleware('auth:sanctum');
    route::post('/register',RegisterController::class);
    route::post('/reset-password',ResetPasswordController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
