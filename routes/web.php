<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('roles', [RolesController::class, 'create']);
Route::get('index', [RolesController::class, 'index']);
