<?php

namespace Soorenaa\Course\Http\Controllers;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return 'course';
    }

    public function create(UserRepo $userRepo)
    {
        $teachers = $userRepo->getTeachers();
        return view('Courses::create' , compact('teachers'));
    }
}