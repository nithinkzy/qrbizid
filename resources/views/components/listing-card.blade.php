@props(['listing'])
<div class="flex flex-col">

    <x-card id="{{ $listing->id }}" class="bg-black w-[512px] h-[300px] mb-3">
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
        <button class="text-black-500">
            <i class="fa-solid fa-id-card"></i> Biz card
        </button>
        <button class="text-black-500 download-btn" data-section="{{ $listing->id }}"
            data-business="{{ $listing->your_name . '-' . $listing->business_name }}">
            <i class="fa-solid fa-download"></i> Download as PNG
        </button>
        <button class="text-black-500">
            <i class="fa-solid fa-pen-to-square"></i> Edit
        </button>
        <form action="/bizcard/{{ $listing->id }}" method="post">
            @csrf
            @method('DELETE')
            <button class="text-red-500">
                <i class="fa-solid fa-trash"></i> Delete</button>
        </form>
    </div>
</div>
<script>
    document.querySelectorAll('.download-btn').forEach(button => {
        button.addEventListener('click', () => {
            const sectionId = button.getAttribute('data-section');
            const businessName = button.getAttribute('data-business');
            const sectionElement = document.getElementById(sectionId);

            html2canvas(sectionElement).then(canvas => {
                const imageDataURL = canvas.toDataURL('image/png');

                const downloadLink = document.createElement('a');
                downloadLink.href = imageDataURL;
                downloadLink.download = businessName + '.png';
                downloadLink.click();
            });
        });
    });
</script>
