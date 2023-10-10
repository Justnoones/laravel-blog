<x-layout>
    <x-slot name="title">
        Register
    </x-slot>
    <section class="bg-yellow-300 p-10">
        <form action="/register" method="POST">
            @csrf
            <x-form.form-wrapper >
                <h1 class="text-black text-4xl font-bold uppercase">Register Form</h1>
                <x-form.input type="text" name="name" id="name" label="Name" placeHolder="Enter Your Name" iconClassName="fa-solid fa-user" />
                <x-form.input type="text" name="username" id="username" label="User Name" placeHolder="Enter Your User Name" iconClassName="fa-solid fa-user" />
                <x-form.input type="email" name="email" id="email" label="Email" placeHolder="Enter Your Email Address" iconClassName="fa-solid fa-envelope" />
                <x-form.input type="password" name="password" id="password" label="Password" placeHolder="Enter Your Passsword" iconClassName="fa-solid fa-key" />
                <div class="w-full flex justify-around items-center">
                    <button type="reset" class="px-6 py-3 border-2 border-black rounded-lg text-lg font-bold" onclick="location.href='/'">Cancel</button>
                    <button type="submit" class="px-6 py-3 border-2 bg-black text-yellow-300 border-black rounded-lg text-lg font-bold">Register</button>
                </div>
            </x-form.form-wrapper>
        </form>
    </section>
</x-layout>
