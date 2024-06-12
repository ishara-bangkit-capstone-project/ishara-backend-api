<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'level_id' => 1,
                'type' => 'image',
                'title' => 'Image Question 1',
                'question' => 'Which is the right letter for this hand sign?',
                'answer' => 'B',
                'image' => 'image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 1,
                'type' => 'text',
                'title' => 'Text Question 1',
                'question' => 'Which is the right hand sign answer for this letter (A)?',
                'answer' => 'A',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'image',
                'title' => 'Image Question 2',
                'question' => 'Which is the right letter for this hand sign?',
                'answer' => 'C',
                'image' => 'image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'text',
                'title' => 'Text Question 2',
                'question' => 'Which is the right hand sign answer for this letter (B)?',
                'answer' => 'B',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'image',
                'title' => 'Image Question 3',
                'question' => 'Which is the right letter for this hand sign?',
                'answer' => 'D',
                'image' => 'image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'text',
                'title' => 'Text Question 3',
                'question' => 'Which is the right hand sign answer for this letter (C)?',
                'answer' => 'B',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('questions')->insert($questions);
    }
}
