<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\projectfilesController;
use App\Http\Controllers\Api\CreateMailController;
use App\Http\Controllers\Api\CustomerNoteController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\ReviewController;
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
    Route::post('projectfiles/updatestatus/{id}','updatestatus');
    Route::delete('projectfiles/{projectfiles}','destroy');
    Route::post('project_review/{projectfiles}','project_review');
    Route::get('project_details/{id}','projectDetails');
});
Route::controller(CreateMailController::class)->group(function(){
    Route::get('compose/index','index');
    Route::post('compose/create','store');
    Route::get('compose/{compose}','show');
    Route::post('compose/edit/{id}','update');
    Route::delete('compose/{compose}','destroy');
});
Route::controller(CustomerNoteController::class)->group(function(){
    Route::get('customerNote/index','index');
    Route::post('customerNote/create','store');
    Route::get('customerNote/{customerNote}','show');
    Route::post('customerNote/edit/{id}','update');
    Route::delete('customerNote/{customerNote}','destroy');
});
Route::controller(TaskController::class)->group(function(){
    Route::get('task/index','index');
    Route::post('task/create','store');
    Route::get('task/{task}','show');
    Route::post('task/edit/{id}','update');
    Route::delete('task/{task}','destroy');
});
Route::controller(ReviewController::class)->group(function(){
    Route::get('review/index','index');
    Route::post('review/create','store');
    Route::get('review/{review}','show');
    Route::post('review/edit/{id}','update');
    Route::delete('review/{review}','destroy');
});

