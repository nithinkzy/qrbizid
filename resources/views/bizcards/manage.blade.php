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
        <div
            class="grid grid-cols-1 grid-rows-4 space-y-10 lg:px-2 lg:space-y-0 lg:space-x-2 lg:grid-cols-2 lg:grid-rows-2 lg:gap-2 mb-20">
            @unless ($listings->isEmpty())
                @foreach ($listings as $listing)
                    <div class="flex flex-col">

                        <a class="hover:scale-105 transition-all" href="/bizcard/{{ $listing->id }}">
                            <x-biz-card :listing="$listing" />
                        </a>
                        <div class="flex justify-evenly mt-4">
                            <a href="/edit/{{ $listing->id }}"
                                class=" inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 hover:scale-105 transition-all">
                                <i class="fa-solid fa-pen-to-square me-2"></i> Edit
                            </a>
                            <a href="/download/{{ $listing->id }}"
                                class=" inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 hover:scale-105 transition-all">
                                <i class="fa-solid fa-id-card me-2"></i> Download

                            </a>
                            <form action="/bizcard/{{ $listing->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-red-900 bg-white border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-red-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-red-700 hover:scale-105 transition-all">
                                    <i class="fa-solid fa-trash me-2"></i> Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Listings Found</p>
        @endunless
</x-layout>
