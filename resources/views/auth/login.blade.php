<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    @if (session('flash-message'))
        <div class="bg-black p-4 text-center">
            <h1 class="text-yellow-300 text-3xl font-bold">{{session('flash-message')}}</h1>
        </div>
    @endif
    <main class="bg-yellow-300 p-10">
        <form action="/login" method="POST">
            @csrf
            <x-form.form-wrapper >
                <h1 class="text-black text-4xl font-bold uppercase">Login Form</h1>
                <x-form.input type="email" name="email" id="email" label="Email" placeHolder="Enter Your Email Address" iconClassName="fa-solid fa-envelope" />
                <x-form.input type="password" name="password" id="password" label="Password" placeHolder="Enter Your Passsword" iconClassName="fa-solid fa-key" />
                <div class="w-full flex justify-around items-center">
                    <button type="reset" class="px-6 py-3 border-2 border-black rounded-lg text-lg font-bold" onclick="location.href='/'">Cancel</button>
                    <button type="submit" class="px-6 py-3 border-2 bg-black text-yellow-300 border-black rounded-lg text-lg font-bold">Login</button>
                </div>
            </x-form.form-wrapper>
        </form>
    </main>
</x-layout>
