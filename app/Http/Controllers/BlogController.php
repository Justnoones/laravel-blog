<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('pages.index', [
            "blogs" => Blog::with('author', 'category')->latest()->get()
        ]);
    }

    public function show (Blog $blog) {
        return view("pages.show", [
            "blog" => $blog,
            "randomBlogs" => Blog::with('author', 'category')->inRandomOrder()->take(3)->get()
        ]);
    }

    public function filter_author (User $user) {
        return view('pages.index', [
            "blogs" => $user->blogs->load('author', 'category')
        ]);
    }

    public function filter_category (Category $category) {
        return view('pages.index', [
            "blogs" => $category->blogs->load('author', 'category')
        ]);
    }
}
