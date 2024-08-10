<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Basic Finance for Organzations',
            'category_id' => 1
        ]);

        Course::create([
            'title' => 'Information Technology(IT) a Business Enabler',
            'category_id' => 2,
        ]);

        Course::create([
            'title' => 'Sale and Marketing',
            'category_id' => 3,
        ]);

        Course::create([
            'title' => 'Administration Function',
            'category_id' => 4
        ]);
    }
}
