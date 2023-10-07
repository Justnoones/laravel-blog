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
            "blogs" => Blog::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function show (Blog $blog) {
        return view("pages.show", [
            "blog" => $blog,
            "randomBlogs" => Blog::with('author', 'category')->inRandomOrder()->take(3)->get()
        ]);
    }
}
