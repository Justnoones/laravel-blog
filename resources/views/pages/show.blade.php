<x-layout>
    <x-slot name='title'>
        {{$blog->title}}
    </x-slot>
    <section class="bg-black bg-opacity-75 flex flex-col px-10 gap-y-10 items-center">
        <x-single-blog :blog="$blog" :randomBlogs="$randomBlogs" />
    </section>
</x-layout>
