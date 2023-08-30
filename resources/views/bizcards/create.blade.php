<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Biz Card
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form action="/bizcard" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="business_name" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="business_name"
                    value="{{ old('business_name') }}" />
                @error('business_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tagline" class="inline-block text-lg mb-2">Company tagline</label>
                <input value="{{ old('tagline') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="tagline" placeholder="" />
                @error('tagline')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="your_name" class="inline-block text-lg mb-2">Your Full Name</label>
                <input value="{{ old('your_name') }}"type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="your_name" placeholder="" />
                @error('your_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="job_title" class="inline-block text-lg mb-2">Job Title</label>
                <input value="{{ old('job_title') }}"type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="job_title" placeholder="" />
                @error('job_title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="phone" class="inline-block text-lg mb-2">Phone Number</label>
                <input value="{{ old('phone') }}"type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="phone" placeholder="Example: +91-xxxxxxx" />
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" value="{{ old('email') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" value="{{ old('website') }}"class="border border-gray-200 rounded p-2 w-full"
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
                    value="{{ old('physical_address') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="physical_address" placeholder="" />
                @error('physical_address')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="linkedin" class="inline-block text-lg mb-2">
                    Linkedin URL
                </label>
                <input type="text" value="{{ old('linkedin') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="linkedin" placeholder="" />
                @error('linkedin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="twitter" class="inline-block text-lg mb-2">
                    Twitter URL
                </label>
                <input type="text" value="{{ old('twitter') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="twitter" placeholder="" />
                @error('twitter')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="facebook" class="inline-block text-lg mb-2">
                    Facebook URL
                </label>
                <input type="text" value="{{ old('facebook') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="facebook" placeholder="" />
                @error('facebook')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="instagram" class="inline-block text-lg mb-2">
                    Instagram URL
                </label>
                <input type="text"
                    value="{{ old('instagram') }}"class="border border-gray-200 rounded p-2 w-full" name="instagram"
                    placeholder="" />
                @error('instagram')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="youtube" class="inline-block text-lg mb-2">
                    Youtube URL
                </label>
                <input type="text" value="{{ old('youtube') }}"class="border border-gray-200 rounded p-2 w-full"
                    name="youtube" placeholder="" />
                @error('youtube')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="instagram" class="inline-block text-lg mb-2">
                    Instagram URL
                </label>
                <input type="text"
                    value="{{ old('instagram') }}"class="border border-gray-200 rounded p-2 w-full" name="instagram"
                    placeholder="" />
                @error('instagram')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="pinterest" class="inline-block text-lg mb-2">
                    Pinterest URL
                </label>
                <input type="text"
                    value="{{ old('pinterest') }}"class="border border-gray-200 rounded p-2 w-full" name="pinterest"
                    placeholder="" />
                @error('pinterest')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="profile_picture" class="inline-block text-lg mb-2">
                    Profile Picture
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="profile_picture" />
                @error('profile_picture')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="document" class="inline-block text-lg mb-2">
                    Any relevant document
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="document" />
                @error('document')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Biz Card
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
