<?php

namespace App\Http\Controllers\Admincp;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Level;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $active = 'courses';
        return view('admin.courses.index',compact('courses','active'));
    }
    public function create()
    {
        $levels=Level::all();
        $active = 'courses';
        return view('admin.courses.create', compact('active', 'levels'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' =>'required',
            'cover' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'level_id' =>'required'
        ]);

        $imageName = time() . '.' . request()->cover->getClientOriginalExtension();
        request()->cover->move(public_path('uploads/courses'), $imageName);

        $course = new Course;
        $course->name = request('name');
        $course->description = request('description');
        $course->cover = $imageName;
        $course->level_id = request('level_id');
        $course->user_id = auth()->id();
        $course->save();

        return redirect('/admincp/courses')->with('success', 'Course added successfully .');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.show')->with('course', $course);
    }

    public function edit($id)
    {
        $active = 'courses';
        $course = Course::findOrFail($id);
        $levels=Level::all();
        return view('admin.courses.edit', compact('course', 'active', 'levels'));
    }


    public function update(Request $request, $id)
    {
        $course = Course::find($id)->update($request->all());
        return redirect('/admincp/courses')->with('success', 'Course updated successfully');
    }


    public function destroy($id)
    {

        $course = Course::findOrFail($id);
        $path = public_path() . '/uploads/courses/' . $course->cover;
        if (file_exists($path)) {
            unlink($path);
        }
        $course->delete();
        return redirect('/admincp/courses')->with('success', 'Course deleted successfully');
    }
}
