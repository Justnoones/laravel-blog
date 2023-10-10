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
        $user1 = User::factory()->create([
            'name' => "Wai Yan Ye Yint",
            'username' => "wai-yan-ye-yint",
            'email' => 'waiyan@gmail.com',
            'is_admin' => true,
            'password' => 'waiyan123'
        ]);
        $user2 = User::factory()->create([
            'name' => "Ei Ei",
            'username' => "ei-ei",
            'email' => 'thazin@gmail.com',
            'is_admin' => false,
            'password' => 'eieieiei'
        ]);
        $user3 = User::factory()->create();

        $frontend = Category::factory()->create([
            'name' => 'frontend',
            'slug' => 'frontend'
        ]);
        $backend = Category::factory()->create([
            'name' => 'backend',
            'slug' => 'backend'
        ]);

        $blog_1 = Blog::factory()->create([
            'user_id' => $user1->id,
            'category_id' => $frontend->id
        ]);

        $blog_2 = Blog::factory()->create([
            'user_id' => $user2->id,
            'category_id' => $backend->id
        ]);

        $blog_3 = Blog::factory()->create([
            'user_id' => $user3->id,
            'category_id' => $frontend->id
        ]);

        $blog_4 = Blog::factory()->create([
            'user_id' => $user3->id,
            'category_id' => $frontend->id
        ]);

        Comment::factory(4)->create([
            'blog_id' => $blog_1->id,
        ]);
        Comment::factory(4)->create([
            'blog_id' => $blog_2->id,
        ]);
        Comment::factory(4)->create([
            'blog_id' => $blog_3->id,
        ]);
        Comment::factory(2)->create([
            'blog_id' => $blog_4->id,
        ]);
    }
}
