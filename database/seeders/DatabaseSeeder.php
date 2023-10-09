<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();
        $user4 = User::factory()->create();
        $user5 = User::factory()->create();
        $frontend = Category::factory()->create(['name' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend']);
        Blog::factory(20)->create([
            'category_id' => $frontend->id
        ]);
        Comment::factory(4)->create([
            'blog_id' => $user1->id
        ]);
        Comment::factory(4)->create([
            'blog_id' => $user2->id
        ]);
        Comment::factory(4)->create([
            'blog_id' => $user3->id
        ]);
        Comment::factory(4)->create([
            'blog_id' => $user4->id
        ]);
        Comment::factory(4)->create([
            'blog_id' => $user5->id
        ]);
    }
}
