<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class PaintJobController extends Controller
{
    public function index(){
        $jobs = Jobs::all();
        return view('paint-job',['jobs'=>$jobs]);
    }
}
