<x-layout>
    <x-slot name="title">
        Create Blog
    </x-slot>
    <section class="bg-yellow-300 p-10">
        <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.form-wrapper >
                <h1 class="text-black text-4xl font-bold uppercase">Create Blog</h1>
                <x-form.input type="text" name="title" id="title" label="Title" placeHolder="Enter Your Blog's Title" />
                <x-form.input type="text" name="slug" id="slug" label="Slug" placeHolder="Enter Your Blog's Slug" />
                <x-form.textarea name="intro" id="intro" label="Intro" placeHolder="Enter Your Blog's Intro" />
                <x-form.textarea name="body" id="body" label="Body" placeHolder="Enter Your Blog's Body" />
                <x-form.input type="file" name="thumbnail" id="thumbnail" label="Thumb Nail" placeHolder="Select Your Blog's Thumb Nail" />
                <x-form.select name="category_id" id="category" :items="$categories" label="Category" />
                <div class="w-full flex justify-around items-center">
                    <button type="reset" class="px-6 py-3 border-2 border-black rounded-lg text-lg font-bold" onclick="location.href='/'">Cancel</button>
                    <button type="submit" class="px-6 py-3 border-2 bg-black text-yellow-300 border-black rounded-lg text-lg font-bold">Create</button>
                </div>
            </x-form.form-wrapper>
        </form>
    </section>
</x-layout>
