<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class PaintJobController extends Controller
{
    public function index(){
        $jobs = Jobs::all();
        $total_painted_cars = Jobs::where('status',2)->count();
        $blue = Jobs::where('target_color', 'Blue')->where('status',2)->count();
        $red = Jobs::where('target_color', 'Red')->where('status',2)->count();
        $green = Jobs::where('target_color', 'Green')->where('status',2)->count();
        return view('paint-job',['jobs'=>$jobs,'total'=>$total_painted_cars, 'blue'=>$blue, 'red'=>$red, 'green'=>$green]);
    }

    public function done($id){
        $job = Jobs::find($id);
        $job->status=3;
        $job->save();

        $queue_job = Jobs::where('status',1)->first();
        if($queue_job){
            $queue_job->status=2;
            $queue_job->save();
        }

        return redirect('/paint-job');
    }
}
