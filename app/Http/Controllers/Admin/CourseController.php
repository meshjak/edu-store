<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Course::latest()->paginate(10);
    }

    public function show(Course $course)
    {
        return response()->json(['data' => $course]);
    }

    public function store()
    {
        $data = request()->all();
        $course = Course::create($data);
        return response()->json([
            'data' => $course
        ]);
    }

    public function update(Course $course)
    {
        $course->update(request()->all());
        return $this->show($course)->getOriginalContent();
    }

    public function destroy(Course $course)
    {
        return Course::destroy($course->id);
    }
}
