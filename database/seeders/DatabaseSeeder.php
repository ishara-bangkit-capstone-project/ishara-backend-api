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
        $this->call([
            PermissionSeeder::class,
            FilesTableSeeder::class,
            StageSeeder::class,
            LevelSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            UserLevelStarSeeder::class,
        ]);
    }
}
