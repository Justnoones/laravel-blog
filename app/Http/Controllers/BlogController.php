<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('pages.index', [
            "blogs" => Blog::with('author')->get()
        ]);
    }

    public function show (Blog $slug) {
        return view("pages.show", [
            "blog" => $slug
        ]);
    }
}
