@php
    $meta = [
        'title' => 'Edit Business Card - QrBizID',
        'description' => 'Edit and update your digital business card details with QrBizID. Keep your online presence up-to-date.',
    ];
@endphp
<x-layout :meta="$meta">
    <main class="pt-32 bg-white dark:bg-gray-900 flex flex-col items-center justify-center">
        <header class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Customize Your Card's Details
            </h1>
            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Tailor Your Card to Perfection</p>
        </header>

        <form action="/bizcard/{{ $listing->id }}" method="post" enctype="multipart/form-data"
            class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-auto lg:gap-10 2xl:grid-cols-3 2xl:grid-rows-1 2xl:gap-8 mt-10 mb-20">
            @csrf
            @method('PUT')
            {{-- Business Information --}}
            <fieldset class="mb-6">
                <legend class="mb-4 text-2xl font-semibold text-white text-center"><span class="text-3xl">1.</span>
                    Business
                    Information</legend>
                <x-card>
                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Logo
                        </label>
                        <input type="file" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="logo" />
                        @error('logo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="business_name" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="business_name"
                            value="{{ $listing->business_name ? $listing->business_name : old('business_name') }}" />
                        @error('business_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="tagline" class="inline-block text-lg mb-2">Company tagline</label>
                        <input value="{{ $listing->tagline ? $listing->tagline : old('tagline') }}" type="text"
                            class="text-black font-semibold border border-gray-200 rounded p-2 w-full" name="tagline"
                            placeholder="" />
                        @error('tagline')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website/Application URL
                        </label>
                        <input type="text"
                            value="{{ $listing->website ? $listing->website : old('website') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="website" />
                        @error('website')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="physical_address" class="inline-block text-lg mb-2">
                            Address
                        </label>
                        <input type="text"
                            value="{{ $listing->physical_address ? $listing->physical_address : old('physical_address') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="physical_address" placeholder="" />
                        @error('physical_address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="document" class="inline-block text-lg mb-2">
                            Any relevant document
                        </label>
                        <input type="file" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="document" />
                        @error('document')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            </fieldset>
            </x-card>
            {{-- Personal Information --}}
            <fieldset class="mb-6">
                <legend class="mb-4 text-2xl font-semibold text-white text-center"><span class="text-3xl">2.</span>
                    Personal Information
                </legend>
                <x-card>
                    <div class="mb-6">
                        <label for="profile_picture" class="inline-block text-lg mb-2">
                            Profile Picture
                        </label>
                        <input type="file" class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="profile_picture" />
                        @error('profile_picture')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="your_name" class="inline-block text-lg mb-2">Your Full Name</label>
                        <input value="{{ $listing->your_name ? $listing->your_name : old('your_name') }}"type="text"
                            class="text-black font-semibold border border-gray-200 rounded p-2 w-full" name="your_name"
                            placeholder="" />
                        @error('your_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="job_title" class="inline-block text-lg mb-2">Job Title</label>
                        <input value="{{ $listing->job_title ? $listing->job_title : old('job_title') }}"type="text"
                            class="text-black font-semibold border border-gray-200 rounded p-2 w-full" name="job_title"
                            placeholder="" />
                        @error('job_title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="inline-block text-lg mb-2">Phone Number</label>
                        <input value="{{ $listing->phone ? $listing->phone : old('phone') }}"type="text"
                            class="text-black font-semibold border border-gray-200 rounded p-2 w-full" name="phone"
                            placeholder="Example: +91-xxxxxxx" />
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text"
                            value="{{ $listing->email ? $listing->email : old('email') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="email" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            </fieldset>
            </x-card>
            {{-- Social Details --}}
            <fieldset class="mb-6 lg:col-span-2 2xl:col-span-1">
                <legend class="mb-4 text-2xl font-semibold text-white text-center"><span class="text-3xl">3.</span>
                    Social Links
                </legend>
                <x-card
                    class="lg:max-w-full lg:grid lg:grid-cols-2 lg:grid-rows-3 lg:gap-10 lg:w-[1000px] 2xl:grid-cols-1 2xl:w-[500px]">
                    <div class="mb-6">
                        <label for="linkedin" class="inline-block text-lg mb-2">
                            Linkedin URL
                        </label>
                        <input type="url"
                            value="{{ $listing->linkedin ? $listing->linkedin : old('linkedin') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="linkedin" placeholder="" />
                        @error('linkedin')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="twitter" class="inline-block text-lg mb-2">
                            Twitter URL
                        </label>
                        <input type="url"
                            value="{{ $listing->twitter ? $listing->twitter : old('twitter') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="twitter" placeholder="" />
                        @error('twitter')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="facebook" class="inline-block text-lg mb-2">
                            Facebook URL
                        </label>
                        <input type="url"
                            value="{{ $listing->facebook ? $listing->facebook : old('facebook') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="facebook" placeholder="" />
                        @error('facebook')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="instagram" class="inline-block text-lg mb-2">
                            Instagram URL
                        </label>
                        <input type="url"
                            value="{{ $listing->instagram ? $listing->instagram : old('instagram') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="instagram" placeholder="" />
                        @error('instagram')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="youtube" class="inline-block text-lg mb-2">
                            Youtube URL
                        </label>
                        <input type="url"
                            value="{{ $listing->youtube ? $listing->youtube : old('youtube') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="youtube" placeholder="" />
                        @error('youtube')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="pinterest" class="inline-block text-lg mb-2">
                            Pinterest URL
                        </label>
                        <input type="url"
                            value="{{ $listing->pinterest ? $listing->pinterest : old('pinterest') }}"class="text-black font-semibold border border-gray-200 rounded p-2 w-full"
                            name="pinterest" placeholder="" />
                        @error('pinterest')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            </fieldset>
            </x-card>

            <div class="mb-6 mx-auto lg:col-span-2 2xl:col-span-3">
                <button
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-lg px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    Update Changes
                </button>

                <a href="/my-account"
                    class=" text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Back </a>
            </div>
        </form>
    </main>
</x-layout>
