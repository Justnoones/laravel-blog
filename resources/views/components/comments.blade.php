@props(['comments', 'total'])
<div class="flex flex-col max-w-[1200px] w-full gap-y-5">
    <h3 class="text-white text-3xl font-bold justify-self-start">Comments ({{$total}})</h3>
    @forelse ($comments as $comment)
        <x-single-comment :comment="$comment" />
    @empty
        <h4 class="text-2xl font-bold text-center text-white">No Comments Yet.</h4>
    @endforelse
    {{$comments->links()}}
</div>
