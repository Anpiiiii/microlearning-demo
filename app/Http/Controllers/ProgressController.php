<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Course;
use App\Models\Module;

class ProgressController extends Controller
{
    public function store(Request $request){
        Progress::create([
            'user_id' => $request->user_id,
            'module_id' => $request->module_id,
            'course_id' => $request->course_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Progress Updated Successfully',
            'code' => 200,
            'data' => null,
        ]);
    }

    public function myProgress($user){
        $mycourses = Course::join('purchases', 'purchases.course_id', 'courses.id')
                            ->where('purchases.user_id', $user)
                            ->get();

        foreach ($mycourses as $course) {
            $total_modules = Module::where('course_id', $course->id)
                                    ->count();

            $doneModules = Progress::where('course_id', $course->id)
                                    ->where('user_id', $user)
                                    ->count();

            if($doneModules == 0){
                $course->progress = 0;
            }else{
                $course->progress = ($doneModules/$total_modules) * 100; 
            }           
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Progress Fetched Successfully',
            'code' => 200,
            'data' => $mycourses,
        ]);
    }
}
