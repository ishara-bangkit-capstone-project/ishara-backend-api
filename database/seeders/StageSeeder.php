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
                'name' => 'Stage 1',
                'description' => 'Description Stage 1',
                'minimum_stars' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stage 2',
                'description' => 'Description Stage 2',
                'minimum_stars' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stage 3',
                'description' => 'Description Stage 3',
                'minimum_stars' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('stages')->insert($stage);
    }
}
