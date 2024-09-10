<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
class ResourcesController extends Controller
{
    //
    function indexbareact(){
       $resources = Resource::where('resourcetype','Bare Act')->get();
    return view('bareact',['resources'=>$resources]);
       
       }

       function indexsyllabus(){
        $resources = Resource::where('resourcetype','Syllabus State Wise')->get();
        return view('swsyllabus',['resources'=>$resources]);
       }
}
