<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store ()
    {
        $validated_data = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('blogs', 'slug')],
            'intro' => ['required', 'min:10'],
            'body' => ['required', 'min:10'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        $validated_data['user_id'] = auth()->id();
        $blog = Blog::create($validated_data);
        return redirect("/blogs/$blog->slug")->with('flash-message', 'Successfully created a new blog.');
    }

    public function create ()
    {
        return view('blogs.create', [
            'categories' => Category::all(),
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
