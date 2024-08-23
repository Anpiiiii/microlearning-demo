<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tryout;
use App\Models\Answer;

class TryoutController extends Controller
{
    public function store(Request $request){
       $questions = $request->questions;
       $answers = $request->answers;
       
       for ($i = 0; $i < count($questions); $i++) {
            $question = $questions[$i];
            $answer = $answers[$i];

            $correct_answer = Answer::where('question_id', $question)
                                    ->value('choice_id');

            $exist_tryOut = Tryout::where('user_id', auth()->user()->id)
                                    ->where('question_id', $question)
                                    ->first();
                                    
            if($exist_tryOut){
                $exist_tryOut->choice_id = $answer;
                if($answer == $correct_answer){
                    $exist_tryOut->status = 'true';
                }else{
                    $exist_tryOut->status = 'false';
                }
                $exist_tryOut->save();
            }else{
                $exist_tryOut = Tryout::create([
                    'user_id' => auth()->user()->id,
                    'question_id' => $question,
                    'choice_id' => $answer
                ]);
                if($exist_tryOut->choice_id == $correct_answer){
                    $exist_tryOut->status = 'true';
                }else{
                    $exist_tryOut->status = 'false';
                }
                $exist_tryOut->save();
            }      
        }

        $correct_answers = Tryout::where('user_id', auth()->user()->id)
                        ->whereIn('question_id', $questions)
                        ->where('status', 'true')
                        ->count();

        $result = intval(($correct_answers/count($questions)) * 100);

        return response()->json([
            'status' => 'success',
            'message' => 'Quiz',
            'code' => 200,
            'data' => $result,
        ]);
    }
}
