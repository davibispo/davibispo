<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SiteController,
    ServicesController,
    ProjectsController
};

Route::resource('projects', ProjectsController::class);
Route::resource('services', ServicesController::class);
Route::resource('site', SiteController::class);
Route::get('/', function () {
    return view('welcome');
});
