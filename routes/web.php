<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FaqsController;




use PharIo\Manifest\Author;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/adetunji',[AboutController::class, 'team1'])->name('team1');
Route::get('/simeon',[AboutController::class, 'team2'])->name('team2');
Route::get('/services',[ServicesController::class, 'index'])->name('services');
Route::get('/pricing',[ServicesController::class, 'pricing'])->name('pricing');
Route::get('/faqs',[FaqsController::class, 'index'])->name('faqs');
Route::get('/imagegallery',[GalleryController::class, 'index'])->name('gallery.image');
Route::get('/videogallery',[GalleryController::class, 'video'])->name('gallery.video');
Route::get('/weddings',[PortfolioController::class, 'weddings'])->name('portfolio.weddings');

//weddings...
Route::get('/doyin-dapo-weddings',[PortfolioController::class, 'doyin_dapo'])->name('portfolio.doyin-dapo');


Route::get('/events',[PortfolioController::class, 'events'])->name('portfolio.events');
Route::get('/portraits',[PortfolioController::class, 'portraits'])->name('portfolio.portraits');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
// Auth::routes();
