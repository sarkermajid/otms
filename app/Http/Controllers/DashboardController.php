<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalTeacher = Teacher::count();
        $totalStudent = Student::count();
        $totalCourse = Course::count();
        $totalCategory = Category::count();
        $totalEnrollCourse = Enroll::count();
        return view('admin.home.index',[
            'totalUser'=>$totalUser,
            'totalTeacher'=>$totalTeacher,
            'totalStudent'=>$totalStudent,
            'totalCourse'=>$totalCourse,
            'totalCategory'=>$totalCategory,
            'totalEnrollCourse'=>$totalEnrollCourse
        ]);
    }
}
