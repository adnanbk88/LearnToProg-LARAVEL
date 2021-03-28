<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', ['courses' => $courses]);
    }
    public function create()
    {
        return view('admin.courses.create');
    }
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'pdf_link' => 'required',
            'image' => 'required'
        ]);

        // Handle File Upload
        if ($request->hasFile('image')) {
            // Get File Name With Extention
            $fileNameWithExt = $request->file('image')->getClientOriginalExtension();
            //Get Just File Name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_". time().'.'. $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
        }

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->slug = $request->slug;
        $course->pdf_link = $request->pdf_link;
        $course->img = $fileNameToStore;

        $course->save();
        return redirect('/admin');
    }
    public function edite($id)
    {
        $course = Course::find($id);
        return view('admin.courses.edite', ['course' => $course]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'pdf_link' => 'required'
        ]);
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->slug = $request->slug;
        $course->pdf_link = $request->pdf_link;

        $course->save();
        return redirect('/admin');
    }
    public function delete()
    {
        $courses = Course::all();
        return view('admin.courses.delete', ['courses' => $courses]);
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
