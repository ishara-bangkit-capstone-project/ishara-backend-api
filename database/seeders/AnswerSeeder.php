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
            // Stage 1
            // Question 1 - 1
            // Text type question
            [
                // Letter A
                'question_id' => 1,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/zoZeKa75FfK4ZbI9XHzH.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter B
                'question_id' => 1,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/A032hqUx7XJHp0eJCdFN.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 1 - 2
            // Image type question
            [
                'question_id' => 2,
                'answer' => 'B',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer' => 'C',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer' => 'D',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'answer' => 'E',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 1 - 3
            // Text type question
            [
                // Letter G
                'question_id' => 3,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/9kGBS8P7sIainh2cm4hH.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter B
                'question_id' => 3,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/A032hqUx7XJHp0eJCdFN.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 1 - 4
            // Image type question
            [
                'question_id' => 4,
                'answer' => 'A',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer' => 'H',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer' => 'I',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'answer' => 'J',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 1 - 5
            // Text type question
            [
                // Letter O
                'question_id' => 5,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/b87TMRpTvcwbLpcsH3GI.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter C
                'question_id' => 5,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/LAIJSzzWc9E1w17PVQOI.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 2 - 1
            [
                // Letter D
                'question_id' => 6,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/bZV2xN7iNq3ZmYbY2G2K.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter H
                'question_id' => 6,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/LL4Dl4bCTamSQRtk9GbT.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 2 - 2
            [
                'question_id' => 7,
                'answer' => 'I',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer' => 'L',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer' => 'K',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'answer' => 'P',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 2 - 3
            [
                // Letter K
                'question_id' => 8,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/1MDgsUjSTC2c71i3xlXD.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter E
                'question_id' => 8,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/4sbnLGHH4SStHPOX95qQ.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 2 - 4
            [
                'question_id' => 9,
                'answer' => 'H',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer' => 'I',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer' => 'J',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'answer' => 'K',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 2 - 5
            [
                // Letter B
                'question_id' => 10,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/A032hqUx7XJHp0eJCdFN.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter F
                'question_id' => 10,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/aFO0NQ3c4WHHsfh6tTNx.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 3 - 1
            [
                // Letter G
                'question_id' => 11,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/9kGBS8P7sIainh2cm4hH.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter J
                'question_id' => 11,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/qfCTiSQOKUQO4ZEiP0zP.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 3 - 3
            [
                'question_id' => 13,
                'answer' => 'G',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'answer' => 'H',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'answer' => 'I',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'answer' => 'J',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 3 - 4
            [
                // Letter A
                'question_id' => 14,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/zoZeKa75FfK4ZbI9XHzH.png',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Letter I
                'question_id' => 14,
                'answer' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/4dlv9KQIG3JujRJqCW4E.png',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Question 3 - 5
            [
                'question_id' => 15,
                'answer' => 'K',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'answer' => 'L',
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'answer' => 'M',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'answer' => 'N',
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('answers')->insert($answer);
    }
}
