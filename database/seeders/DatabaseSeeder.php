<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(ModuleDataSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ChoiceSeeder::class);
        $this->call(AnswerSeeder::class);
    }
}
