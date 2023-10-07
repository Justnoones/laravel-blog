<form>
    <div class="grid grid-flow-col grid-cols-4 px-5 py-4 rounded-xl bg-yellow-300 text-black w-full">
        <input
            type="text"
            name="search"
            placeholder="Search Blogs"
            class="placeholder:text-black bg-inherit outline-none col-span-3 self-center justify-self-center w-full"
            value="{{request('search')?request('search'):null}}"
            autocomplete="off"
        >
        @if (request('category'))
            <input
                type="hidden"
                name="category"
                value="{{request('category')}}"
            >
        @elseif (request('author'))
        <input
            type="hidden"
            name="author"
            value="{{request('author')}}"
        >
        @endif

        <button
            type="submit"
            class="border-s-2 border-black sm:space-x-1">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span class="max-sm:hidden">Search</span>
        </button>
    </div>
</form>
