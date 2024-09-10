<?php

namespace App\Http\Controllers;
use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
       function  indexcwsp(){
        $jobs = Job::all();
        // return response()->json($events);
        return view('indexcwsp', ['jobs' => $jobs]);
       }
}
