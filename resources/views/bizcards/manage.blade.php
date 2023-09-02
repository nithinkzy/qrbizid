<x-layout>
    <div class="pt-52 bg-white dark:bg-gray-900 flex flex-col items-center justify-center ">

        <header>
            <h1 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Manage Your Biz Cards
            </h1>
        </header>

        <div class="flex justify-end mb-10">
            <a href="/create"
                class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                {{ count($listings) < 5 ? 'Create New' : 'Limit Reached' }}
            </a>
        </div>
        <div class="grid grid-cols-1
        grid-rows-4 gap-10 lg:grid-cols-2 lg:grid-rows-2 lg:gap-8 mb-20">
            @unless ($listings->isEmpty())
                @foreach ($listings as $listing)
                    <div class="hover:scale-105 transition-all">
                        <div class="flex flex-row justify-evenly gap-5 mb-[-20px] ">
                            <form action="/bizcard/{{ $listing->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-red-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-red-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-red-700 hover:scale-105 transition-all">
                                    <i class="fa-solid fa-trash"></i> Remove</button>
                            </form>
                            <a href="/edit/{{ $listing->id }}"
                                class=" inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 hover:scale-105 transition-all">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                        </div>
                        <a href="/bizcard/{{ $listing->id }}">
                            <div class="w-[512px] h-[300px]">
                                <x-card class="bg-black  mb-3">
                                    <div class="flex flex-row justify-between">
                                        <div class="basis-1/2">
                                            <div class="flex flex-row mb-6">
                                                <img class="w-48 mr-6 md:block  md:h-10 md:w-10 md:rounded-full"
                                                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                                                    alt="" />
                                                <div>
                                                    <p class="text-lg text-bold">{{ $listing->business_name }}</p>
                                                    <p class="text-base">{{ $listing->tagline }}</p>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <p class="text-lg text-semibold">{{ $listing->your_name }}</p>
                                                <p class="text-base">{{ $listing->job_title }}</p>
                                            </div>
                                            <div class="text-sm">
                                                <p>{{ $listing->phone }}</p>
                                                <p>{{ $listing->email }}</p>
                                                <p>{{ $listing->website }}</p>
                                            </div>

                                        </div>
                                        <div class="basis-1/2">
                                            <img class="ms-auto md:block"
                                                src="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </x-card>
                            </div>
                        </a>
                        <div class="flex justify-evenly mt-4">
                            <button class="text-white hover:scale-105 transition-all">
                                <i class="fa-solid fa-qrcode"></i> Download QR
                            </button>
                            <button class="text-white hover:scale-105 transition-all">
                                <i class="fa-solid fa-id-card"></i> Download Biz ID
                            </button>
                            {{-- <a href="/bizcard/{{ $listing->id }}" class="text-white hover:scale-105 transition-all">
                                <i class="fa-solid fa-id-card"></i> Save
                            </a>

                            <button class="text-white hover:scale-105 transition-all">
                                <i class="fa-solid fa-download"></i> Business card
                            </button> --}}


                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Listings Found</p>
        @endunless

    </div>

</x-layout>
