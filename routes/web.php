<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Portfolio Routes
|--------------------------------------------------------------------------
*/


Route::get('/',[PortfolioController::class,'homePage'])->name('home');
Route::get('/skills',[PortfolioController::class,'skillPage'])->name('skill');
Route::get('/project',[PortfolioController::class,'projectPage'])->name('project');
Route::get('/about',[PortfolioController::class,'aboutPage'])->name('about');
Route::get('/contact',[PortfolioController::class,'contactPage'])->name('contact');
