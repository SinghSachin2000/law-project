<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Exam;
use App\Models\Instructor;
use App\Models\Blogs;
class ExamController extends Controller
{
    function indexallexams(){
        $exams = Exam::all();
        $teachers = Instructor::all();
        return view('exams',['exams'=>$exams,'teachers'=>$teachers]);
       }
       function index12th(){
        $exams = Exam::where(  'examDomain','After 12th',)->get();

        $teachers = Instructor::all();
        return view('12th',['exams'=>$exams,'teachers'=>$teachers]);
       
       }

       function indexgraduation(){
        $exams = Exam::where(  'examDomain','After Graduation',)->get();
        $teachers = Instructor::all();
        return view('graduation',['exams'=>$exams,'teachers'=>$teachers]);
       }
       function indexllb(){
        $exams = Exam::where(  'examDomain','After LLB',)->get();
        $teachers = Instructor::all();
        return view('llb',['exams'=>$exams,'teachers'=>$teachers]);
       }
       function indexlaw(){
        $exams = Exam::where(  'examDomain','After Law',)->get();
        $teachers = Instructor::all();
        return view('law',['exams'=>$exams,'teachers'=>$teachers]);
       }

       public function showexam($id)
       {
           $exam = Exam::findOrFail($id);
           $teachers = Instructor::limit(9)->get();
           $latestblog = Blogs::limit(4)->get(); 
           return view('showexam', compact('exam','teachers','latestblog'));
       }
}
