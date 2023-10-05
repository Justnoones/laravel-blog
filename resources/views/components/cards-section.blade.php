@props(['blogs'])
<section id="blogs" class="px-5 py-2 gap-4 space-y-10 bg-black">
    <h1 class="text-3xl text-yellow-400 font-bold text-center my-7">Blogs</h1>
    <div class="p-5 grid grid-cols-3 max-xl:grid-cols-2 max-md:grid-cols-1 gap-10">
        @foreach ($blogs as $blog)
            <x-card :blog="$blog" />
        @endforeach
    </div>
</section>
