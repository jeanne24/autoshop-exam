<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function report(){
        $total_painted_cars = Jobs::where('status',3)->count();
        $blue = Jobs::where('target_color', 'Blue')->where('status',3)->count();
        $red = Jobs::where('target_color', 'Red')->where('status',3)->count();
        $green = Jobs::where('target_color', 'Green')->where('status',3)->count();
        return ['total'=>$total_painted_cars, 'blue'=>$blue, 'red'=>$red, 'green'=>$green];
    }

    public function getJobs(){
        $ongoing_jobs = Jobs::where('status',2)->get();
        $queued_jobs = Jobs::where('status',1)->get();
        return ['ongoing'=>$ongoing_jobs, 'queued'=>$queued_jobs];
    }
}
