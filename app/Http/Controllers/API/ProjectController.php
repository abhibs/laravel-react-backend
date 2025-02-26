<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function homeProjects()
    {
        $datas = Project::inRandomOrder()->limit(3)->get();
        return $datas;
    }


    public function projects()
    {
        $datas = Project::inRandomOrder()->get();
        return $datas;
    }
}
