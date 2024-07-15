<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;
use App\Models\Category;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Course $course){
        $modules = Module::where('course_id', $course->id)
                            ->get();

        foreach ($modules as $module) {
            $module->course = Course::find($module->course_id);
            $module->category = Category::find($module->course->category->id);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Modules Fetched Successfully',
            'code' => 200,
            'data' => $modules,
        ]);
    }
}
