<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolesController;

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

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('home', [AuthController::class, 'home']);
    Route::middleware(['roles:admin'])->group(function(){
        Route::get('roles', [RolesController::class, 'index']);
        Route::post('roles', [RolesController::class, 'create']);
        Route::put('roles/{role}', [RolesController::class, 'update']);
        
        Route::get('roles/{role}', [RolesController::class, 'show']);
        Route::get('roles/{role}/users', [RolesController::class, 'users']);
        
    });
});

