<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Cources;
use App\Models\Blogs;
class EventController extends Controller
{
   function index(){
    $events = Event::limit(3)->get();
    $courses = Cources::limit(4)->get();
    $latestblog = Blogs::limit(4)->get(); 
    return view('home', ['events' => $events,'courses'=>$courses,'latestblog'=>$latestblog]);
   }
}
