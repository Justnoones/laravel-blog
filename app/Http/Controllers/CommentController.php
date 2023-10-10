<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create (Blog $blog)
    {
        $validated_comment = request()->validate([
            'body' => ['required', 'min:10']
        ]);
        $blog->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect("/blogs/$blog->slug");
    }
}
