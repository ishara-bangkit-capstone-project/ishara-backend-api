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
            // Stage 1 ( a - j )
            // Level 1
            [
                'level_id' => 1,
                'type' => 'text',
                'title' => 'Question 1 - 1',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (A)',
                'answer' => 'A',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 1,
                'type' => 'image',
                'title' => 'Question 1 - 2',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'E',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/4sbnLGHH4SStHPOX95qQ.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 1,
                'type' => 'text',
                'title' => 'Question 1 - 3',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (B)',
                'answer' => 'B',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 1,
                'type' => 'image',
                'title' => 'Question 1 - 4',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'H',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/LL4Dl4bCTamSQRtk9GbT.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 1,
                'type' => 'text',
                'title' => 'Question 1 - 5',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (C)',
                'answer' => 'C',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Level 2
            [
                'level_id' => 2,
                'type' => 'text',
                'title' => 'Question 2 - 1',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (D)',
                'answer' => 'D',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'image',
                'title' => 'Question 2 - 2',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'I',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/4dlv9KQIG3JujRJqCW4E.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'text',
                'title' => 'Question 2 - 3',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (E)',
                'answer' => 'E',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'image',
                'title' => 'Question 2 - 4',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'J',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/qfCTiSQOKUQO4ZEiP0zP.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 2,
                'type' => 'text',
                'title' => 'Question 2 - 5',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (F)',
                'answer' => 'F',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Level 3
            [
                'level_id' => 3,
                'type' => 'text',
                'title' => 'Question 3 - 1',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (G)',
                'answer' => 'G',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'sequence',
                'title' => 'Question 3 - 2',
                'question' => 'Tebak susunan isyarat dibawah',
                'answer' => "{\"answer\":[\"B\",\"A\",\"J\",\"A\"]}",
                'image' => '"{\"question\":[\"https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/zoZeKa75FfK4ZbI9XHzH.png\",\"https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/zoZeKa75FfK4ZbI9XHzH.png\",\"https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/qfCTiSQOKUQO4ZEiP0zP.png\",\"https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/zoZeKa75FfK4ZbI9XHzH.png\"]}"',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'text',
                'title' => 'Question 3 - 3',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'J',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/1MDgsUjSTC2c71i3xlXD.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'text',
                'title' => 'Question 3 - 4',
                'question' => 'Pilih isyarat tangan berikut yang mewakili huruf berikut? (I)',
                'answer' => 'I',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_id' => 3,
                'type' => 'image',
                'title' => 'Question 3 - 5',
                'question' => 'Apa makna isyarat tangan ini?',
                'answer' => 'L',
                'image' => 'https://storage.googleapis.com/ishara_file_storage/file/2024/06/18/LL4Dl4bCTamSQRtk9GbT.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('questions')->insert($questions);
    }
}
