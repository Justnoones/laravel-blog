@props(['blogs'])

<section id="blogs" class="px-5 py-2 gap-4 space-y-10 bg-black">
    <div class="flex items-center justify-center gap-y-5 flex-col">
        <h1 class="text-3xl text-yellow-400 font-bold">Blogs</h1>
        <x-category-dropdown />
    </div>
    <x-blog-serach-bar />
    <div class="p-5 grid grid-cols-3 max-xl:grid-cols-2 max-md:grid-cols-1 gap-10">
        @forelse ($blogs as $blog)
            <x-blog-card :blog="$blog" />
            @empty
            <p class="text-yellow-400 text-xl font-bold justify-self-center col-span-full">No Blogs Found.</p>
        @endforelse
    </div>
</section>
