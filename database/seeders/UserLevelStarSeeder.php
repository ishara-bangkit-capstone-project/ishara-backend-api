<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLevelStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_level_stars = [
            [
                'user_id' => 2,
                'level_id' => 1,
                'obtained_stars' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'obtained_stars' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('user_level_stars')->insert($user_level_stars);
    }
}
