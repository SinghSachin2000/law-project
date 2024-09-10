<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    function index(){

        return view('result');
       }


     function  indexcontact(){
        return view('contact');
       }

       function  indexaboutus(){
        return view('aboutus');
       }

       function  indexwhyus(){
        return view('whyus');
       }

       function  indexcwsp(){
        return view('indexcwsp');
       }
}
