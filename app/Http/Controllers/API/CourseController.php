<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function homeCourses()
    {
        $datas = Course::inRandomOrder()->limit(4)->get();
        return $datas;
    }
}
