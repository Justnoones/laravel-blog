<header class="sticky top-0 z-10 bg-yellow-300 bg-opacity-90 px-5">
    <nav class="flex justify-between items-center">
        <a href="/" class="text-black flex items-center gap-5 hover:text-slate-700 hover:scale-[1.1] transition-all duration-100">
            <h1 class="hidden sm:block text-4xl font-bold">DUCK AGE</h1>
            <img src='/duck.png' alt="clover_icon" width="75" height="75" />
        </a>
        <ul class="flex gap-6 items-center">
            <li class="hover:text-slate-700 hover:scale-[1.1] transition-all duration-75"><a class="font-bold text-lg" href="/#blogs">Blogs</a></li>
            @guest
                <li class="hover:text-slate-700 hover:scale-[1.1] transition-all duration-75"><a class="font-bold text-lg" href="/login">Login</a></li>
                <li class="hover:text-slate-700 hover:scale-[1.1] transition-all duration-75"><a class="font-bold text-lg" href="/register">Register</a></li>
            @else
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-slate-700 hover:scale-[1.1] transition-all duration-75 font-bold text-lg">Logout</button>
                </form>
            @endguest
        </ul>
    </nav>
</header>
