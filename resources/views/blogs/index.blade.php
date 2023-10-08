<x-layout>
    <x-slot name="title">
        Home
    </x-slot>
    @if (session('flash-message'))
        <div class="bg-black p-4 text-center">
            <h1 class="text-yellow-300 text-3xl font-bold">{{session('flash-message')}}</h1>
        </div>
    @endif
    <x-hero-section />
    <x-blogs-section
        :blogs="$blogs"
    />
</x-layout>
