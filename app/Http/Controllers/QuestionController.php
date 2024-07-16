<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Choice;

class QuestionController extends Controller
{
    public function index($course)
    {
        $questions = Question::where('course_id', $course)
                            ->orderBy('id')
                            ->get();

        foreach ($questions as $question) {
            $question->choices = Choice::where('question_id', $question->id)
                                        ->get();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Questions Fetched Successfully',
            'code' => 200,
            'data' => $questions,
        ]);
    }
}
