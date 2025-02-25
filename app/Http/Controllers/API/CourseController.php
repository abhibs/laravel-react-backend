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


    public function courses()
    {
        $datas = Course::inRandomOrder()->get();
        return $datas;
    }

    public function courseDetail(Request $request)
    {
        $id = $request->input('id');
        $data = Course::where('id', $id)->get();
        return $data;
    }
}
