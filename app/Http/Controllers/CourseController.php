<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Purchase;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request){
        if($request->search){
            $courses = Course::where('name', 'Like', '%'.$request->search.'%')
                                    ->get();
        }else{
            $courses = Course::all();
        }

        foreach ($courses as $course) {
           $course->category = Category::find($course->category_id);
        }
        
        return response()->json([
            'status' => 'success',
            'message' => 'Courses Fetched Successfully',
            'code' => 200,
            'data' => $courses,
        ]);
    }

    public function getCoureseByCategory($category_id)
    {
        $courses = Course::where('category_id', $category_id)
                            ->get();

        foreach ($courses as $course) {
            $course->category = Category::find($course->category_id);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Courses Fetched Successfully',
            'code' => 200,
            'data' => $courses,
        ]);
    }

    public function myCourses($user){
        $courses = Course::join('purchases', 'purchases.course_id', 'courses.id')
                            ->where('purchases.user_id', $user)
                            ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Courses Fetched Successfully',
            'code' => 200,
            'data' => $courses,
        ]);
        
    }
}
