<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function home()
    {
        $courses = Course::all();
        return view('welcome', ['courses' => $courses]);
    }
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->get();
        return view('course', ['course' => $course[0]]);
    }
}
