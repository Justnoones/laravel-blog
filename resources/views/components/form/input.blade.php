@props(['type', 'name', 'id', 'label', 'iconClassName', 'placeHolder'])


<div class="flex max-md:flex-col w-full border-2 border-black rounded-lg max-md:space-y-1 max-md:p-5">
    <label
        for="{{$id}}"
        class="bg-inherit px-3 py-2 flex-1 min-w-[15%] max-xl:min-w-[25%] text-xl font-bold flex justify-center items-center space-x-2 max-md:justify-start">
        <i class="{{$iconClassName}}"></i>
        <span>{{$label}}</span>
    </label>
    <span class="border-l-2 border-black"></span>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="bg-inherit px-3 outline-none focus:outline-none py-2 max-md:border-b-2 max-md:border-black md:flex-[10] flex-1 placeholder:text-black" autocomplete="off" placeholder="{{$placeHolder}}" value="{{old($name)}}" >
    @error($name)
        <p>{{$message}}</p>
    @enderror
</div>
