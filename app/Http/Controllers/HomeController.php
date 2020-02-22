<?php

namespace App\Http\Controllers;
use App\Jobs;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function create(Request $request){
        $doing = Jobs::where('status',2)->count();
        $job = new Jobs;
        $job->plate_number = $request->input('platenumber');
        $job->current_color = $request->input('currentColor');
        $job->target_color = $request->input('targetColor');
        if($doing<5){
            $job->status = "2"; //default doing

        }else{
            $job->status = "1"; //default queue
        }
        $result = $job->save();
        return view('home',['result'=>$result]);
    }
}
