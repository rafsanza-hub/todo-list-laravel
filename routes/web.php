<?php

use App\Http\Controllers\HaloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'] );

Route::get('/halo/request', [HaloController::class, 'request']);
Route::get('/halo/{name}', [HaloController::class, 'halloDunia']);
Route::get('/home/save',[HaloController::class, 'save']);