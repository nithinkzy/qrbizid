{{-- Print Size --}}
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
<div
    class="w-full flex flex-col items-center text-center justify-evenly rounded-lg shadow 
    p-12 text-gray-900 bg-white border border-gray-100 mx-auto dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white bg-black mb-5">
    <div class="mb-5">

        @if ($listing->logo)
            <img class="mx-auto block h-24 w-24 rounded-full mb-3" src="{{ $listing->logo }}" alt="" />
        @endif
        <div class="" id="company-name">
            <p class="text-[9px] sm:text-lg text-bold">{{ $listing->business_name }}</p>
            <p class="text-[9px] sm:text-base">{{ $listing->tagline }}</p>
        </div>
    </div>
    <div class="qr mb-5">

        <img class=" block   "
            src="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
            alt="" />
        <span class="realtive bottom-0 text-[7px] text-end ">Powered by QrBizID</span>
    </div>
    <div class=" mb-5">
        <p class="text-[9px] sm:text-base text-semibold">{{ $listing->your_name }}</p>
        <p class="text-[9px] sm:text-sm">{{ $listing->job_title }}</p>
    </div>
    <div class="text-[9px]  sm:text-xs  space-y-1">
        <p><i class="fa-solid fa-phone pe-2"></i> {{ $listing->phone }}</p>
        <p><i class="fa-solid fa-envelope pe-2"></i>{{ $listing->email }}</p>
        <p><i class="fa-solid fa-globe pe-2"></i>{{ $listing->website }}</p>
        <p><i class="fa-solid fa-location-dot pe-2"></i>{{ $listing->physical_address }}</p>
    </div>
    <div id="socials  " class="flex justify-evenly space-x-2 mt-5">
        @foreach ($socials as $social)
            @if ($social['url'])
                <a href="{{ $social['url'] }}" class="bg-red w-9 h-9 text-4xl">{!! $social['icon'] !!}</a>
            @endif
        @endforeach
    </div>

</div>
