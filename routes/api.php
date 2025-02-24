<?php

use App\Http\Controllers\API\ChartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/chart/datas', [ChartController::class, 'charts']);
