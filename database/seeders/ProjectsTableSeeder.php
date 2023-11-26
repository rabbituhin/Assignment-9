<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start with a clean slate
        DB::table('projects')->truncate();

        // Insert sample data
        DB::table('projects')->insert([
            'title' => 'Project 1',
            'description' => 'Description for Project 1',
            'image_url' => 'path/to/image1.jpg',
            // Add more fields as needed for your projects
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('projects')->insert([
            'title' => 'Project 2',
            'description' => 'Description for Project 2',
            'image_url' => 'path/to/image2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more sample projects as needed
    }
}