<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('pages.index', [
            "blogs" => Blog::all()
        ]);
    }
}
