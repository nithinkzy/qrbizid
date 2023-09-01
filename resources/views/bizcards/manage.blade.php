<x-layout>
    <x-card class=" p-10 ">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Your Biz Cards
            </h1>
        </header>


        <div class="flex flex-col items-center gap-5">
            @unless ($listings->isEmpty())
                @foreach ($listings as $listing)
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
                        <div class="flex justify-evenly">
                            <a href="/bizcard/{{ $listing->id }}" class="text-black-500">
                                <i class="fa-solid fa-id-card"></i> Biz card
                            </a>

                            <button class="text-black-500">
                                <i class="fa-solid fa-download"></i> Download
                            </button>

                            <a href="/bizcard/{{ $listing->id }}/edit" class="text-black-500">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form action="/bizcard/{{ $listing->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500">
                                    <i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Listings Found</p>
        @endunless

    </x-card>

</x-layout>
