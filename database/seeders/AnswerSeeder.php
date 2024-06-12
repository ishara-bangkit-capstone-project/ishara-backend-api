<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answer = [
            [
                'question_id' => 1,
                'answer' => 'A',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'B',
                'is_correct' => true,
            ],
            [
                'question_id' => 1,
                'answer' => 'C',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'D',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'A',
                'is_correct' => true,
            ],
            [
                'question_id' => 2,
                'answer' => 'B',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'C',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'D',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'A',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'B',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'C',
                'is_correct' => true,
            ],
            [
                'question_id' => 3,
                'answer' => 'D',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => 'A',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => 'B',
                'is_correct' => true,
            ],
            [
                'question_id' => 4,
                'answer' => 'C',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'answer' => 'D',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => 'A',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => 'B',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => 'C',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'answer' => 'D',
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'answer' => 'A',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'answer' => 'B',
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'answer' => 'C',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'answer' => 'D',
                'is_correct' => false,
            ],
        ];

        DB::table('answers')->insert($answer);
    }
}
