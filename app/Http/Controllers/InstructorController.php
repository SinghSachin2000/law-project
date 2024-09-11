<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Blogs;
class InstructorController extends Controller
{
    function teachers(){
        $teachers = Instructor::all();

        return view('teachers',['teachers'=>$teachers]);
    }
   
    



   public function teacherdetails($id){
        $teacher = Instructor::findOrFail($id);
        $teacher->education = json_decode($teacher->education, true);

        $latestblog = Blogs::limit(4)->get(); 

        return view('alldetailsteacher',compact('teacher','latestblog'));
    }
}
