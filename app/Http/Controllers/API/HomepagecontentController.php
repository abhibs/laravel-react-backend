<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HomepageContent;
use Illuminate\Http\Request;

class HomepagecontentController extends Controller
{
    public function videoSection()
    {
        $videodata = HomepageContent::select('video_desc', 'video_url')->first();
        return $videodata;
    }
}
