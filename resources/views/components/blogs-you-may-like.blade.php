@props(['randomBlogs'])

<h1 class="text-3xl font-bold text-yellow-300 text-center">Blogs You May Like</h1>
<div class="flex max-lg:flex-col gap-10 mb-10">
    @foreach ($randomBlogs as $rdb)
        <div class="flex-1">
            <x-blog-card :blog="$rdb" />
        </div>
    @endforeach
</div>
