<?php

use App\Http\Controllers\API\ChartController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/chart/datas', [ChartController::class, 'charts']);
Route::get('/review/datas', [ReviewController::class, 'reviews']);
Route::post('/contact/send', [ContactController::class, 'contactSend']);
