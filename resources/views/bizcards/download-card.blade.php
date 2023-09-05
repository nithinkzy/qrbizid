{{-- Print Size --}}
<div id="biz-card"
    class="hidden grid grid-cols-2 items-stretch 
    w-[1050px] h-[600px] 
    p-12 text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white bg-black  ">
    <div class="flex flex-col justify-evenly">
        <div class="flex gap-3 items-center mb-5" id="logo-section">
            @if ($listing->logo)
                <img class="block h-24 w-24 rounded-full"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="" />
            @endif
            <div class="grid grid-rows-2" id="company-name">
                <p class="text-4xl text-bold">{{ $listing->business_name }}</p>
                <p class="text-3xl">{{ $listing->tagline }}</p>
            </div>
        </div>
        <div class="flex flex-col mb-5">
            <p class="text-3xl text-semibold">{{ $listing->your_name }}</p>
            <p class="text-2xl">{{ $listing->job_title }}</p>
        </div>
        <div class="text-xl space-y-1">
            <p><i class="fa-solid fa-phone pe-2"></i> {{ $listing->phone }}</p>
            <p><i class="fa-solid fa-envelope pe-2"></i>{{ $listing->email }}</p>
            <p><i class="fa-solid fa-globe pe-2"></i>{{ $listing->website }}</p>
        </div>

    </div>
    <div class="flex flex-col  justify-center">
        <img class="ms-auto block  h-4/5"
            src="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
            alt="" />
        <span class="realtive bottom-0 text-[7px] text-end ">Powered by QrBizID</span>

    </div>
</div>
