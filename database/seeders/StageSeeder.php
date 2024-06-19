<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stage = [
            [
                'name' => 'Abjad 1',
                'description' => 'Belajar isyarat untuk abjad a - j',
                'minimum_stars' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abjad 2',
                'description' => 'Belajar isyarat untuk abjad k - s',
                'minimum_stars' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abjad 3',
                'description' => 'Belajar isyarat untuk abjad t - z',
                'minimum_stars' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('stages')->insert($stage);
    }
}
