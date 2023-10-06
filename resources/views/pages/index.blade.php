<x-layout>
    <x-slot name="title">
        Home
    </x-slot>
    <x-hero-section />
    <x-blogs-section
        :blogs="$blogs"
        :categories="$categories"
        :currentCategory="$currentCategory??null"
    />
</x-layout>
