@props(['comment'])
<div class="flex flex-col border-2 border-white rounded-lg p-5 shadow-2xl bg-black bg-opacity-20 gap-y-5">
    <div class="flex gap-x-4">
        <img src="{{$comment->author->avatar}}" class="w-14 h-14 rounded-full">
        <div class="flex flex-col gap-y-1">
            <h4 class="text-1xl font-bold text-white">{{$comment->author->name}}</h4>
            <p class="text-lg text-white text-opacity-70">{{$comment->created_at->diffForhumans()}}</p>
        </div>
        </div>
    <p class="text-lg text-white">{{$comment->body}}</p>
</div>
