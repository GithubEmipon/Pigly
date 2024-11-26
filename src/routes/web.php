<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/goal_setting', [AuthController::class, 'create']);
Route::post('/create', [ContactController::class, 'log']);
Route::post('/weight_logs', [ContactsController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [ContactController::class,'weight_logs']);
    ROute::get('/search',[ContactController::class, 'search']);
    Route::post('/delete', [ContactController::class, 'destroy']);
});




