<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        User::factory(3)->create();

        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);

        Category::create([
            'name' => 'Western',
            'slug' => 'western'
        ]);

        Category::create([
            'name' => 'Eastern',
            'slug' => 'eastern'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Fiction',
            'slug' => 'fiction'
        ]);

        Post::factory(10)->create();
    }
}
