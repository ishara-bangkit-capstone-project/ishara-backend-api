<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = [
            [
                'name' => 'file1',
                'path' => 'path/to/file1',
                'type' => 'pdf',
                'size' => 1024,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'file2',
                'path' => 'path/to/file2',
                'type' => 'pdf',
                'size' => 2048,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
