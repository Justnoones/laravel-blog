<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index ()
    {
        return view('blogs.index', [
            "blogs" => Blog::latest()
                        ->filter(request(['search', 'category', 'author']))
                        ->paginate(6)
                        ->withQueryString()
        ]);
    }

    public function show (Blog $blog)
    {
        return view("blogs.show", [
            "blog" => $blog,
            "randomBlogs" => Blog::with('author', 'category')->inRandomOrder()->take(3)->whereNot('slug', $blog->slug)->get()
        ]);
    }

    public function subscription_controller (Blog $blog)
    {
        if (User::find(auth()->id())->isSubscribed($blog)) {
            $blog->unSubscribe();
            return back()->with('flash-message', 'You are no longer subscribed to this blog.');
        } else {
            $blog->subscribe();
            return back()->with('flash-message', 'You are now subscribed to this blog.');
        }
    }
}
