<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\DemoclassController;
use App\Http\Controllers\ReqCallBackController;
use App\Http\Controllers\CommetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstructorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class, 'index'])->name('home');

Route::get('/results', [ResultController::class, 'index'])->name('result');

Route::get('/contact', [ResultController::class, 'indexcontact'])->name('contact');

Route::get('/aboutus', [ResultController::class, 'indexaboutus'])->name('aboutus');

Route::get('/whyus', [ResultController::class, 'indexwhyus'])->name('whyus');

Route::get('/cwsp', [JobController::class, 'indexcwsp'])->name('indexcwsp');

Route::get('/bare-act', [ResourcesController::class, 'indexbareact'])->name('bareact');

Route::get('/swsyllabus', [ResourcesController::class, 'indexsyllabus'])->name('swsyllabus');

Route::get('/courses', [CourcesController::class, 'indexallcourses'])->name('courses');

Route::get('/courses/judiciary', [CourcesController::class, 'indexjudiciary'])->name('judiciary');

Route::get('/courses/clat', [CourcesController::class, 'indexclat'])->name('clat');

Route::get('/courses/cuet', [CourcesController::class, 'indexcuet'])->name('cuet');

Route::get('/courses/{id}', [CourcesController::class, 'show'])->name('courses.show');



Route::get('/exams', [ExamController::class, 'indexallexams'])->name('exams');

Route::get('/exams/12th', [ExamController::class, 'index12th'])->name('12th');

Route::get('/exams/graduation', [ExamController::class, 'indexgraduation'])->name('graduation');

Route::get('/exams/law', [ExamController::class, 'indexlaw'])->name('law');

Route::get('/exams/llb', [ExamController::class, 'indexllb'])->name('llb');

Route::get('/exams/{id}', [ExamController::class, 'showexam'])->name('exam.showexam');


Route::get('/blogs', [BlogController::class, 'indexblog'])->name('blogs.index');

Route::get('/blogs/{id}', [BlogController::class, 'indexshowblog'])->name('fullblog');


Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::post('/demo-class-submit', [DemoclassController::class, 'store'])->name('demo-class.submit');

Route::post('/req-callback-submit', [ReqCallBackController::class, 'store'])->name('req-callback.submit');

Route::post('/comment-class-submit', [CommetController::class, 'store'])->name('comment.submit');

Route::post('/contact-class-submit', [ContactController::class, 'store'])->name('contact.submit');


Route::get('/legal-pendency-notice', [ContactController::class, 'legalnotice'])->name('lpnotice');

Route::get('/allteachers', [InstructorController::class, 'teachers'])->name('teachers');


Route::get('/allteachers/{id}', [InstructorController::class, 'teacherdetails'])->name('teachers.alldetailsteacher');

