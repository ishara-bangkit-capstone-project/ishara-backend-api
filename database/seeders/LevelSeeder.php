<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'stage_id' => 1,
                'name' => 'Level 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 1,
                'name' => 'Level 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 1,
                'name' => 'Level 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 2,
                'name' => 'Level 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 2,
                'name' => 'Level 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 2,
                'name' => 'Level 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 3,
                'name' => 'Level 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 3,
                'name' => 'Level 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stage_id' => 3,
                'name' => 'Level 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('levels')->insert($levels);
    }
}
