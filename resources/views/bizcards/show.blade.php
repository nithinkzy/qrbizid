<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $listing->business_name }} - Biz Card | QrBizID

    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Meta SEO -->
    <meta name="title" content="QrBizID - Empower Your Presence with QR">
    <meta name="description"
        content="Share your digital business card with anyone, anywhere. Empower your business with QrBizID.',">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Nithin Kumar K S">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="QrBizID - Empower Your Presence with QR">
    <meta property="og:description"
        content="Share your digital business card with anyone, anywhere. Empower your business with QrBizID.">
    {{-- <meta property="og:image" content="https://example.com/qrbizid-logo.png"> --}}
    <meta property="og:url" content="https://qrbizid.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="QrBizID - Empower Your Presence with QR">
    <meta name="twitter:description"
        content="Share your digital business card with anyone, anywhere. Empower your business with QrBizID.">
    <meta name="twitter:image" content="https://example.com/qrbizid-logo.png">
    <meta name="twitter:url" content="https://qrbizid.com">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    {{-- <link rel="manifest" href="/site.webmanifest"> --}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    @php
        $socials = [
            'linkedin' => [
                'url' => $listing->linkedin,
                'icon' => '<i class="fa-brands fa-linkedin"></i>',
            ],
            'twitter' => [
                'url' => $listing->twitter,
                'icon' => '<i class="fa-brands fa-square-x-twitter"></i>',
            ],
            'facebook' => [
                'url' => $listing->facebook,
                'icon' => '<i class="fa-brands fa-square-facebook"></i>',
            ],
            'instagram' => [
                'url' => $listing->instagram,
                'icon' => '<i class="fa-brands fa-square-instagram"></i>',
            ],
            'youtube' => [
                'url' => $listing->youtube,
                'icon' => '<i class="fa-brands fa-square-youtube"></i>',
            ],
            'pinterest' => [
                'url' => $listing->pinterest,
                'icon' => '<i class="fa-brands fa-square-pinterest"></i>',
            ],
        ];
        
    @endphp
    <main class="bg-black">

        <div
            class="drop-shadow-lg w-full lg:w-9/12 xl:w-1/2  h-screen flex flex-col items-center text-center  rounded-lg shadow 
        text-gray-900 bg-white border border-gray-100 mx-auto dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white bg-black mb-5">

            <div id="logo" class=" flex flex-col items-center my-5">
                @if ($listing->logo)
                    <img src="{{ asset('storage/' . $listing->logo) }}" alt=""
                        class="p-3 rounder-lg bg-blend-hard-light drop-shadow-md" height="88" width="88">
                @endif
                <div class="">
                    <p class="px-2 text-white text-3xl font-semibold text-slate-900">{{ $listing->business_name }}</p>
                    <p class="px-2 text-white text-sm font-semibold text-slate-900 mt-1">{{ $listing->tagline }}</p>
                </div>
            </div>
            <div id="image_section" class="relative w-full">
                <img src="{{ $listing->profile_picture ? asset('storage/' . $listing->profile_picture) : asset('/images/no-image.png') }}"
                    alt="" class="w-full drop-shadow-xl">
                <div class="absolute bottom-2 left-1 ">
                    <p class="px-2 bg-white  text-lg font-semibold text-slate-900">{{ $listing->your_name }}</p>
                    <p class="px-2 bg-white text-sm font-medium text-slate-700 mt-2">{{ $listing->job_title }}</p>
                </div>
            </div>
            {{-- Details grid --}}
            <div id="details"
                class="my-10  grid grid-rows-2 grid-cols-2 justify-items-center text-center gap-10 lg:gap-8">
                <a class=" drop-shadow-mdtext-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 w-full"
                    href="tel:{{ $listing->phone }}">
                    <i class="fa-solid fa-phone text-2xl"></i>
                    <p class="mt-2 font-semi-bold">{{ $listing->phone }}</p>
                </a>
                <a class="drop-shadow-md text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 w-full"
                    href="mailto:{{ $listing->email }}">
                    <i class="fa-solid fa-envelope text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->email }} </p>
                </a>
                <a class="drop-shadow-md text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 w-full"
                    target="_blank" href="{{ $listing->website }}">
                    <i class="fa-solid fa-link text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->website }} </p>
                </a>
                <a class="drop-shadow-md text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 w-full"
                    target="_blank" href="http://maps.google.com/?q={{ $listing->physical_address }}">
                    <i class="fa-solid fa-location-dot text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->physical_address }} </p>
                </a>
            </div>
            {{-- Cta buton --}}
            <div id="cta"
                class="w-full lg:w-1/2 text-sm font-medium flex align-items-center justify-evenly my-10    lg:my-5         ">
                <a href="{{ asset('storage/' . $listing->document) }}" download
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    <i class="fa-solid fa-download pe-3"></i>Document</a>
                <a href="{{ route('download.vcard', ['business_Card' => $listing->id]) }}" download
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    <i class="fa-solid fa-floppy-disk pe-3"></i>Save Contacts</a>
            </div>
            {{-- Social Buttons --}}
            <div id="socials  " class="flex justify-evenly space-x-2 my-5 ">
                @foreach ($socials as $social)
                    @if ($social['url'])
                        <a href="{{ $social['url'] }}" class="bg-red w-9 h-9 text-4xl">{!! $social['icon'] !!}</a>
                    @endif
                @endforeach
            </div>
            <span class="text-white text-[12px]  ">Powered by <a href="https://qrbizid.com"
                    class="underline underline-offset-6 hover:underline-offset-2">QrBizID <i
                        class="fa-solid fa-square-up-right"></i></a></span>

        </div>
    </main>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
