<x-layout>
    <x-slot name='title'>
        {{$blog->title}}
    </x-slot>
    @if (session('flash-message'))
        <div class="bg-black p-4 text-center">
            <h1 class="text-yellow-300 text-3xl font-bold">{{session('flash-message')}}</h1>
        </div>
    @endif
    <section class="bg-black bg-opacity-75 flex flex-col px-10 gap-y-10 items-center py-10">
        <h1 class="text-3xl font-bold text-yellow-400">
            {{$blog['title']}}
        </h1>
        <div class="flex items-center justify-center flex-col gap-y-5 bg-yellow-300 rounded-xl p-10 max-w-7xl">
            <img src='{{$blog->thumbnail ? asset("storage/$blog->thumbnail") : "https://i.pinimg.com/564x/84/e1/11/84e1114dd10b1787231c7561ca7e9e57.jpg"}}'>

            <h2 class="text-xl text-black">
                Author - <a href={{"/author/".$blog->author->username}} class="font-bold">
                    {{$blog->author->name}}
                </a>
            </h2>
            @auth
                <form action="/subscription/{{$blog->slug}}" method="POST">
                    @csrf
                    @if (auth()->user()->isSubscribed($blog))
                        <button type="submit" class="px-6 py-3 text-white bg-opacity-60 bg-gray-600 rounded-3xl font-bold shadow-2xl">Unsubscribe</button>
                    @else
                        <button type="submit" class="px-6 py-3 bg-black text-white rounded-3xl font-bold shadow-2xl">Subscribe</button>
                    @endif
                </form>
            @endauth
            <h3>
                Uploaded - <span class="font-bold">{{$blog->created_at->diffForHumans()}}</span>
            </h3>
            <a  href={{"/categories/".$blog->category->slug}} class="bg-black px-2 py-1 rounded-xl text-yellow-300 text-opacity-70 font-bold">
                {{$blog->category->name}}
            </a>
            <p class="text-lg font-bold opacity-60">{{$blog->intro}}{{$blog->body}}</p>
        </div>
        @auth
        <div
            class="max-w-[1200px] w-full flex flex-col border-2 @error('body') border-red-500 @else border-white @enderror rounded-lg p-5 shadow-2xl bg-black bg-opacity-20 gap-y-5"
        >
            <x-comment-form :blog="$blog" />
        </div>
        @else
            <h4 class="text-white text-2xl">Please <a href="/login" class="text-blue-300 font-bold border-b-2 border-blue-300">Login</a> & <a href="/register" class="text-blue-300 font-bold border-b-2 border-blue-300">Register</a> to participate in this discussion.</h4>
        @endauth
        <x-comments :comments="$blog->comments()->latest()->paginate(3)" :total="$blog->comments->count()" />
        <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
    </section>
</x-layout>
