<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <main class="bg-yellow-300 p-10">
        <form action="/login" method="POST">
            @csrf
            <x-form.form-wrapper >
                <x-form.input type="email" name="email" id="email" label="Email" placeHolder="Enter Your Email Address" iconClassName="fa-solid fa-envelope" />
                <x-form.input type="password" name="password" id="password" label="Password" placeHolder="Enter Your Passsword" iconClassName="fa-solid fa-key" />
                <div class="w-full flex justify-around items-center">
                    <button type="reset" class="px-6 py-3 border-2 border-black rounded-lg text-lg font-bold">Cancel</button>
                    <button type="submit" class="px-6 py-3 border-2 bg-black text-yellow-300 border-black rounded-lg text-lg font-bold">Submit</button>
                </div>
            </x-form.form-wrapper>
        </form>
    </main>
</x-layout>
