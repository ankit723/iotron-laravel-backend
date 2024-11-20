<?php


use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/portfolio', [ProjectController::class, 'index']) ; // Get all projects
Route::get('/portfolio/{url}', [ProjectController::class, 'show']); // Get a single project
