@props(['blog'])

<form action="/blogs/{{$blog->slug}}/comment" method="POST">
    @csrf
    <textarea
        name="body"
        cols="10"
        rows="5"
        class="w-full resize-none bg-inherit border-0 outline-none focus:outline-none text-white @error('body') placeholder:text-red-500 @enderror text-xl"
        @error('body')
        placeholder="{{$message}}"
        @else
        placeholder="say something..."
        @enderror></textarea>
    <div class="flex justify-end">
        <button
            type="submit"
            class="px-4 py-3 rounded-lg border-2 border-white text-white text-lg hover:bg-white hover:text-black transition-all duration-150"
        >
            Add Comment
        </button>
    </div>
</form>
