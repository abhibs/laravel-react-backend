<?php

use App\Http\Controllers\API\ChartController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\FooterController;
use App\Http\Controllers\API\InformationController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/chart/datas', [ChartController::class, 'charts']);
Route::get('/review/datas', [ReviewController::class, 'reviews']);
Route::post('/contact/send', [ContactController::class, 'contactSend']);
Route::get('/home/course/datas', [CourseController::class, 'homeCourses']);
Route::get('course/datas', [CourseController::class, 'courses']);
Route::post('course/detail', [CourseController::class, 'courseDetail']);
Route::get('footer/data', [FooterController::class, 'footer']);
Route::get('information/data', [InformationController::class, 'information']);
Route::get('service/datas', [ServiceController::class, 'services']);
Route::get('home/project/datas', [ProjectController::class, 'homeProjects']);
Route::get('project/datas', [ProjectController::class, 'projects']);
