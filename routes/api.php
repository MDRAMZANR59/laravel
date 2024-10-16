<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\projectfilesController;
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

Route::controller(AuthController::class)->group(function(){
    Route::post('register','_register');
    Route::post('login','_login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(CustomerController::class)->group(function(){
    Route::get('customer/index','index');
    Route::post('customer/create','store');
    Route::get('customer/{customer}','show');
    Route::post('customer/edit/{id}','update');
    Route::delete('customer/{customer}','destroy');
});
Route::controller(UserController::class)->group(function(){
    Route::get('user/index','index');
    Route::post('user/create','store');
    Route::get('user/{user}','show');
    Route::post('user/edit/{id}','update');
    Route::delete('user/{user}','destroy');
});
Route::controller(StaffController::class)->group(function(){
    Route::get('staff/index','index');
    Route::post('staff/create','store');
    Route::get('staff/{staff}','show');
    Route::post('staff/edit/{id}','update');
    Route::delete('staff/{staff}','destroy');
});
Route::controller(projectfilesController::class)->group(function(){
    Route::get('projectfiles/index','index');
    Route::post('projectfiles/create','store');
    Route::get('projectfiles/{projectfiles}','show');
    Route::post('projectfiles/edit/{id}','update');
    Route::delete('projectfiles/{projectfiles}','destroy');
});

