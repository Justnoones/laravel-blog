@props(['name', 'id', 'items', 'label', 'iconClassName' => null, 'placeHolder'])

<div class="flex max-md:flex-col w-full border-2 @error($name) border-red-600 @else border-black @enderror rounded-lg max-md:space-y-1 max-md:p-5">
    <label
        for="{{$id}}"
        class="bg-inherit px-3 py-2 flex-1 min-w-[15%] max-xl:min-w-[25%] text-xl font-bold flex justify-center items-center space-x-2 max-md:justify-start @error($name) text-red-600 @else text-black @enderror">
        @if ($iconClassName)
        <i class="{{$iconClassName}}"></i>
        @endif
        <span>{{$label}}</span>
    </label>
    <span class="border-l-2 @error($name) border-red-600 @else border-black @enderror"></span>
    <select name="{{$name}}" id="states" class="bg-black border border-black text-black block w-full p-2.5 dark:bg-black dark:border-black dark:placeholder-black bg-opacity-70 dark:text-white @error($name) max-md:border-red-600 @else max-md:border-black @enderror md:flex-[10] flex-1 @error($name) placeholder:text-red-600 @else placeholder:text-black @enderror">
        @error($name)
            <option disabled selected>{{$message}}</option>
        @enderror
        @foreach ($items as $item)
            <option {{old($name) == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
