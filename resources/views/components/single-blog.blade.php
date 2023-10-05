@props(['blog', 'randomBlogs']);

<h1 class="text-3xl font-bold text-yellow-300">
    {{$blog['title']}}
</h1>
<div class="flex items-center justify-center flex-col gap-y-5 bg-yellow-300 rounded-xl p-10 max-w-7xl">
    <img src="https://i.pinimg.com/564x/84/e1/11/84e1114dd10b1787231c7561ca7e9e57.jpg">

    <h2 class="text-xl text-black">
        Author - <a href="" class="font-bold">
            {{$blog->author->name}}
        </a>
    </h2>
    <h3>
        Uploaded - <span class="font-bold">{{$blog->created_at->diffForHumans()}}</span>
    </h3>
    <a href="" class="bg-black px-2 py-1 rounded-xl text-yellow-300 text-opacity-70 font-bold">
        {{$blog->category->name}}
    </a>
    <p class="text-lg font-bold opacity-60">{{$blog->intro}}{{$blog->body}}</p>
</div>

<h1 class="text-3xl font-bold text-yellow-300 text-center">Blogs You May Like</h1>
<div class="flex gap-10 mb-10">
    @foreach ($randomBlogs as $rdb)
        <div class="flex-1">
            <x-card :blog="$rdb" />
        </div>
    @endforeach
</div>
