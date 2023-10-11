@props(['type', 'name', 'id', 'label', 'iconClassName' => null, 'placeHolder'])

<div class="flex max-md:flex-col w-full border-2 @error($name) border-red-600 @else border-black @enderror rounded-lg max-md:space-y-1 max-md:p-5">
    @if ($type == 'file')
        <input
            type="{{$type}}"
            name="{{$name}}"
            id="{{$id}}"
            class="block border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
            file:bg-transparent file:border-0
            file:bg-gray-100 file:mr-4
            file:py-3 file:px-4
            dark:file:bg-gray-700 dark:file:text-gray-400 w-full bg-inherit px-3 outline-none focus:outline-none py-2 max-md:border-b-2 @error($name) max-md:border-red-600 @else max-md:border-black @enderror md:flex-[10] flex-1 @error($name) placeholder:text-red-600 @else placeholder:text-black @enderror"
            autocomplete="off"
            placeholder="@error($name) {{$message}} @else {{$placeHolder}} @enderror"
            @error($name) @else value="{{old($name)}}" @enderror
        />
    @else
    <label
        for="{{$id}}"
        class="bg-inherit px-3 py-2 flex-1 min-w-[15%] max-xl:min-w-[25%] text-xl font-bold flex justify-center items-center space-x-2 max-md:justify-start @error($name) text-red-600 @else text-black @enderror">
        @if ($iconClassName)
            <i class="{{$iconClassName}}"></i>
        @endif
        <span>{{$label}}</span>
    </label>
    <span class="border-l-2 @error($name) border-red-600 @else border-black @enderror"></span>
    <input
        type="{{$type}}"
        name="{{$name}}"
        id="{{$id}}"
        class="bg-inherit px-3 outline-none focus:outline-none py-2 max-md:border-b-2 @error($name) max-md:border-red-600 @else max-md:border-black @enderror md:flex-[10] flex-1 @error($name) placeholder:text-red-600 @else placeholder:text-black @enderror"
        autocomplete="off"
        placeholder="@error($name) {{$message}} @else {{$placeHolder}} @enderror"
        @error($name) @else value="{{old($name)}}" @enderror
    />
    @endif
</div>
