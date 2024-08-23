<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'question_id' => 1,
            'choice_id' => 3,
        ]);
        Answer::create([
            'question_id' => 2,
            'choice_id' => 3,
        ]);
        Answer::create([
            'question_id' => 3,
            'choice_id' => 9,
        ]);
        Answer::create([
            'question_id' => 4,
            'choice_id' => 15,
        ]);
        Answer::create([
            'question_id' => 5,
            'choice_id' => 19,
        ]);

        Answer::create([
            'question_id' => 14,
            'choice_id' => 50,
        ]);
        Answer::create([
            'question_id' => 15,
            'choice_id' => 51,
        ]);
        Answer::create([
            'question_id' => 16,
            'choice_id' => 58,
        ]);
        Answer::create([
            'question_id' => 18,
            'choice_id' => 66,
        ]);
        Answer::create([
            'question_id' => 19,
            'choice_id' => 69,
        ]);

        Answer::create([
            'question_id' => 20,
            'choice_id' => 69,
        ]);
        Answer::create([
            'question_id' => 21,    
            'choice_id' => 76,
        ]);
        Answer::create([
            'question_id' => 22,
            'choice_id' => 81,
        ]);
        Answer::create([
            'question_id' => 23,
            'choice_id' => 86,
        ]);
        Answer::create([
            'question_id' => 24,
            'choice_id' => 88,
        ]);
        Answer::create([
            'question_id' => 25,
            'choice_id' => 89,
        ]);
        Answer::create([
            'question_id' => 26,
            'choice_id' => 91,
        ]);
        Answer::create([
            'question_id' => 7,
            'choice_id' => 26,
        ]);
        Answer::create([
            'question_id' => 8,
            'choice_id' => 27,
        ]);
        Answer::create([
            'question_id' => 9,
            'choice_id' => 34,
        ]);
        Answer::create([
            'question_id' => 10,
            'choice_id' => 35,
        ]);
        Answer::create([
            'question_id' => 11,
            'choice_id' => 40,
        ]);
        Answer::create([
            'question_id' => 12,
            'choice_id' => 43,
        ]);
        Answer::create([
            'question_id' => 13,
            'choice_id' => 46,
        ]);
        Answer::create([
            'question_id' => 17,
            'choice_id' => 62,
        ]);
    }
}
