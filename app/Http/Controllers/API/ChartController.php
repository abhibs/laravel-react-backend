<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function charts()
    {
        $datas = Chart::inRandomOrder()->get();
        return $datas;
    }
}
