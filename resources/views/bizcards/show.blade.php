<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>{{ $listing->business_name }} | BizCard</title>
</head>

<body>
    <main class="">
        <div class="w-full md:w-1/2 flex flex-col container mx-auto">
            <div id="image_section" class="relative">
                <img src="{{ $listing->profile_picture ? asset('storage/' . $listing->profile_picture) : asset('/images/no-image.png') }}"
                    alt="" class="">
                <div class="absolute bottom-2 left-1 ">
                    <p class="px-2 bg-white  text-lg font-semibold text-slate-900">{{ $listing->your_name }}</p>
                    <p class="px-2 bg-white text-sm font-medium text-slate-700 mt-2">{{ $listing->job_title }}</p>
                </div>
                <div id="logo" class="absolute top-0 right-0 flex flex-row items-center">
                    <div class="">
                        <p class="text-xs bg-white px-1">{{ $listing->business_name }}</p>
                        <p class="text-xs bg-white px-1 mt-1">{{ $listing->tagline }}</p>
                    </div>
                    @if ($listing->logo)
                        <img src="{{ $listing->logo }}" alt="" class="p-3 rounder-lg bg-blend-hard-light"
                            height="88" width="88">
                    @endif
                </div>
            </div>
            <div id="main" class="text-left">
            </div>
            <div id="details" class="my-10 grid grid-rows-2 grid-cols-2 justify-items-center text-center gap-10">
                <a class="hover:bg-slate-100 w-full" href="tel:{{ $listing->phone }}">
                    <i class="fa-solid fa-phone text-2xl"></i>
                    <p class="mt-2 font-semi-bold">{{ $listing->phone }}</p>
                </a>

                <a class="hover:bg-slate-100 w-full" href="mailto:{{ $listing->email }}">
                    <i class="fa-solid fa-envelope text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->email }} </p>
                </a>
                <a class="hover:bg-slate-100 w-full" target="_blank" href="{{ $listing->website }}">
                    <i class="fa-solid fa-link text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->website }} </p>
                </a>
                <a class="hover:bg-slate-100 w-full" target="_blank"
                    href="http://maps.google.com/?q={{ $listing->physical_address }}">
                    <i class="fa-solid fa-location-dot text-2xl"></i>
                    <p class="mt-2 font-semi-bold"> {{ $listing->physical_address }} </p>
                </a>

            </div>
            <div id="cta"
                class="text-sm font-medium flex align-items-center justify-evenly mt-6 -4 mb-6 pb-10
                 border-b border-slate-200">
                <a href="{{ asset('storage/' . $listing->document) }}" download
                    class="h-10 px-6 font-semibold rounded-md bg-black text-white flex items-center">
                    Document</a>
                <a href="{{ route('download.vcard', ['business_Card' => $listing->id]) }}" download
                    class="h-10 px-6 font-semibold rounded-md bg-black text-white flex items-center">
                    Save Contacts</a>
                {{-- <a target="_blank" href="http://maps.google.com/?q={{ $listing->physical_address }}" download
                    class="h-10 px-6 font-semibold rounded-md bg-black text-white flex items-center">
                    Get Direction</a> --}}
            </div>
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

            <div id="socials  " class="flex justify-evenly space-x-2 mt-5">
                @foreach ($socials as $social)
                    @if ($social['url'])
                        <a href="{{ $social['url'] }}" class="bg-red w-9 h-9 text-4xl">{!! $social['icon'] !!}</a>
                    @endif
                @endforeach
            </div>

            <div id="visit_website"></div>
        </div>
    </main>

</body>

</html>
