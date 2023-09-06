@props(['listing'])
<div
    class="grid grid-cols-2 items-stretch
    w-full max-w-[512px] h-fit lg:w-[512px] lg:h-[300px]
    p-3 lg:p-6 text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white bg-black  ">
    <div class="flex flex-col justify-evenly">
        <div class="flex gap-3 items-center mb-2 lg:mb-5" id="logo-section">
            @if ($listing->logo)
                <img class="block  h-10 w-10 rounded-full" src="{{ asset('storage/' . $listing->logo) }}" alt="" />
            @endif
            <div class="grid grid-rows-2" id="company-name">
                <p class="text-[9px] sm:text-lg text-bold">{{ $listing->business_name }}</p>
                <p class="text-[9px] sm:text-base">{{ $listing->tagline }}</p>
            </div>
        </div>
        <div class="flex flex-col mb-2 lg:mb-5">
            <p class="text-[9px] sm:text-base text-semibold">{{ $listing->your_name }}</p>
            <p class="text-[9px] sm:text-sm">{{ $listing->job_title }}</p>
        </div>
        <div class="text-[9px]  sm:text-xs lg:space-y-1">
            <p><i class="fa-solid fa-phone pe-2"></i> {{ $listing->phone }}</p>
            <p><i class="fa-solid fa-envelope pe-2"></i>{{ $listing->email }}</p>
            <p><i class="fa-solid fa-globe pe-2"></i>{{ $listing->website }}</p>
        </div>

    </div>
    <div class="flex flex-col items-center justify-center">
        <img class="ms-auto md:block  h-4/5"
            src="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
            alt="" />
        <span class="realtive bottom-0 text-[7px] text-end ">Powered by QrBizID</span>

    </div>
</div>
