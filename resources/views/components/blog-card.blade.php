@props(['blog'])
<div class="flex flex-col bg-yellow-300 px-5 py-10 space-y-8 rounded-lg min-h-[800px]">
    <img src="https://i.pinimg.com/564x/84/e1/11/84e1114dd10b1787231c7561ca7e9e57.jpg">
    <h1 class="text-2xl font-bold flex-1">
        {{$blog->title}}
    </h1>
    <h2 class="text-xl flex-1">
        Author - <a href="/?author={{$blog->author->username}}{{request('search')?'&search='.request('search'):''}}{{request('category')?'&category='.request('category'):''}}" class="font-bold">{{$blog->author->name}}</a>
    </h2>
    <div class="cursor-pointer flex-1">
        <a class="bg-slate-900 text-yellow-400 px-2 py-1 rounded-lg" href="/?category={{$blog->category->slug}}{{request('search')?'&search='.request('search'):''}}{{request('author')?'&author='.request('author'):''}}">
            {{$blog->category->name}}
        </a>
    </div>
    <p class="font-bold opacity-75 flex-6 flex-grow-[13]">
        {{$blog->intro}}
    </p>
    <div class="flex-1">
        <a href={{'/blogs/'.$blog->slug}} class="bg-black bg-opacity-70 font-yellow-400 px-5 py-4 rounded-lg text-yellow-400 border border-yellow-100 text-xl font-bold hover:bg-yellow-800 hover:text-white hover:bg-opacity-70 transition-all duration-200">
            Read More...
        </a>
    </div>
</div>
