<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Default Laravel route

Route::get('/', function () {

    return view('welcome');

});

// Portfolio routes

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');