<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Blog::truncate();
        Category::truncate();
        User::truncate();

        $user1 = User::factory(1)->create();
        $user2 = User::factory(1)->create();
        $user3 = User::factory(1)->create();

        $frontend = Category::factory()->create([
            'name' => 'frontend',
            'slug' => 'frontend'
        ]);

        $backend = Category::factory()->create([
            'name' => 'backend',
            'slug' => 'backend'
        ]);

        Blog::factory(100)->create([
            'category_id' => 1,
        ]);

        Blog::factory(100)->create([
            'category_id' => 2,
        ]);
    }
}
