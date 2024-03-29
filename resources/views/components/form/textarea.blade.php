@props(['name', 'id', 'label', 'iconClassName' => null, 'placeHolder'])

<div class="flex flex-col w-full border-2 @error($name) border-red-600 @else border-black @enderror rounded-lg max-md:space-y-1 max-md:p-5">
    <label
        for="{{$id}}"
        class="bg-inherit px-3 py-2 flex-1 min-w-[15%] max-xl:min-w-[25%] text-xl font-bold flex justify-center items-center space-x-2 max-md:justify-start @error($name) text-red-600 @else text-black @enderror">
        <span>{{$label}}</span>
    </label>
    <textarea
        name="{{$name}}"
        id="{{$id}}"
        class="{{$name}} bg-inherit resize-none px-3 outline-none focus:outline-none py-2 max-md:border-b-2 @error($name) max-md:border-red-600 @else max-md:border-black @enderror md:flex-[10] flex-1 @error($name) placeholder:text-red-600 @else placeholder:text-black @enderror "
        autocomplete="off"
        rows="5"
        cols="5"
        placeholder="@error($name) {{$message}} @else {{$placeHolder}} @enderror"

    >{{old($name)}}</textarea>
</div>
