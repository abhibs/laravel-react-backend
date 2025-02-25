<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information()
    {
        $data = Information::find(1);
        return $data;
    }
}
