<x-layout>
    <main class="h-screen flex-grow flex items-center justify-center flex-col bg-white dark:bg-gray-900 ">

        <x-card class=" p-10 rounded ">
            <header class="text-center">
                <h2 class="mb-4 text-2xl font-semibold">
                    Register
                </h2>
                <p class="mb-4 font-light text-gray-500 sm:text-lg dark:text-gray-400">Join Us Today and Unlock Exclusive
                    Benefits</p>
            </header>

            <form method="post" action="/users" class="text-start">
                @csrf

                <div class="mb-6">
                    <label for="name" class="font-semibold mb-2">
                        Name
                    </label>
                    <input type="text" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                        name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="font-semibold mb-2">Email</label>
                    <input type="email" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="font-semibold mb-2">
                        Password
                    </label>
                    <input type="password" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                        name="password" value="{{ old('password') }}" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password2" class="font-semibold mb-2">
                        Confirm Password
                    </label>
                    <input type="password" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                        name="password_confirmation" value="{{ old('password_confirmation') }}" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-center">
                    <button type="submit"
                        class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                        Sign Up
                    </button>
                </div>
                <p class="mt-10 text-center font-light text-gray-500 sm:text-xl dark:text-gray-400">Already have an
                    account?
                    <a class="underline hover:underline-offset-2" href="/login">
                        Login
                    </a>
                </p>

            </form>
        </x-card>
    </main>
</x-layout>
