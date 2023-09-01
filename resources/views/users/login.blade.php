<x-layout>
    <!-- Centered Login Section -->
    <main class="h-screen flex-grow flex items-center justify-center flex-col bg-white dark:bg-gray-900 ">
        <x-card class="p-10 rounded">
            <header class="text-center">
                <h2 class="mb-4 text-2xl font-semibold">
                    Login
                </h2>
                <p class="mb-4 font-light text-gray-500 sm:text-lg dark:text-gray-400">Login in to your account</p>
            </header>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">

            <form method="post" action="/users/authenticate" class="text-start">
                @csrf

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
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">

                <div class="mb-6 text-center">
                    <button type="submit"
                        class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                        Sign In
                    </button>
                </div>
                <p class="mt-10 text-center font-light text-gray-500 sm:text-xl dark:text-gray-400">Don't have an
                    account?<a class="underline hover:underline-offset-2" href="/register">
                        Register
                    </a>
                </p>
            </form>
        </x-card>
    </main>

</x-layout>
