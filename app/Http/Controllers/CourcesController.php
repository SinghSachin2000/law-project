<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\Instructor;
use App\Models\Blogs;
class CourcesController extends Controller
{
    function indexallcourses(){
        $courses = Cources::all();
        return view('courses',['courses'=>$courses]);
       }

       function indexjudiciary(){
     
        $courses = Cources::where(  'courseDomain','Judiciary',)->get();

        $teachers = Instructor::limit(2)->get();
        return view('judiciary',['courses'=>$courses,'teachers'=>$teachers]);
       }

       function indexclat(){
   
        $courses = Cources::where(  'courseDomain','CLAT',)->get();

        $teachers = Instructor::limit(2)->get();
        return view('clat',['courses'=>$courses,'teachers'=>$teachers]);
       }

       function indexcuet(){
   
        $courses = Cources::where(  'courseDomain','CUET',)->get();
        $teachers = Instructor::limit(2)->get();
        return view('cuet',['courses'=>$courses,'teachers'=>$teachers]);
       }

       public function show($id)
       {
           $course = Cources::findOrFail($id);
           $discountedPrice = $course->price * 1.30; 

           $total = $discountedPrice -$course->price ;

           $teachers=Instructor::limit(6)->get();
           $latestblog = Blogs::limit(4)->get(); 
           return view('show', compact('course','discountedPrice','total','teachers','latestblog'));
       }
}
