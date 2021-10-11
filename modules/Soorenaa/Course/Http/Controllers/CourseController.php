<?php

namespace Soorenaa\Course\Http\Controllers;

use App\Http\Controllers\Controller;
use Soorenaa\User\Repositories\UserRepo;
use Soorenaa\Category\Repositories\CategoryRepo;

class CourseController extends Controller
{
    public function index()
    {
        return 'course';
    }

    public function create(UserRepo $userRepo , CategoryRepo $categoryRepo)
    {
        $teachers = $userRepo->getTeachers();
        $categories = $categoryRepo->all();
        return view('Courses::create' , compact('teachers' , 'categories'));
    }
}