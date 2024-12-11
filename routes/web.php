<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/worker', [FrontendController::class, 'worker'])->name('worker');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/quote', [FrontendController::class, 'quote'])->name('quote');

Route::get('/service-refinement', [FrontendController::class, 'serviceRefinement'])->name('service-refinement');
Route::get('/service-cleaning', [FrontendController::class, 'serviceCleaning'])->name('service-cleaning');
Route::get('/service-goods-transport', [FrontendController::class, 'serviceTransport'])->name('service-transport');
