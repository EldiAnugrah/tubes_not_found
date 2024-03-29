<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Animation',
            'slug' => 'animation'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        // Post::factory(20)->create();
    }
}
