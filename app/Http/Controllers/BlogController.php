<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        $blogs = Blog::latest();
        if (request('search')) {
            $blogs->where('title', 'LIKE', '%'.request('search').'%');
        }
        return view('pages.index', [
            "blogs" => $blogs->get(),
            "categories" => Category::all()
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
            "blogs" => $user->blogs->all(),
            "categories" => Category::all()
        ]);
    }

    public function filter_category (Category $category) {
        return view('pages.index', [
            "blogs" => $category->blogs->all(),
            "categories" => Category::all(),
            "currentCategory" => $category
        ]);
    }
}
