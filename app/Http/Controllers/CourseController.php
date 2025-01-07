<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Get all courses and pass them to the view
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function edit($id)
    {
        // Find the course by its ID and pass it to the edit view
        $course = Course::findOrFail($id);
        return view('edit-course', compact('course'));
    }

    public function update(Request $request, $id)
    {
        // Find the course by its ID
        $course = Course::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slope' => 'required|integer|between:55,155',
            'red_tee_rating' => 'required|numeric|between:90,140.9',
            'white_tee_rating' => 'required|numeric|between:110,140.9',
            'blue_tee_rating' => 'required|numeric|between:120,140.9',
            'red_tee_yardage' => 'required|integer',
            'white_tee_yardage' => 'required|integer',
            'blue_tee_yardage' => 'required|integer',
        ]);

        // Update the course with the validated data
        $course->update($validatedData);

        // Redirect back to the course list with a success message
        return redirect()->route('courses.index')->with('message', 'Course updated successfully.');
    }
}
