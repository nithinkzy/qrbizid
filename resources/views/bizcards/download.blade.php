<x-layout>
    <div class="pt-52 bg-white dark:bg-gray-900 flex flex-col items-center justify-center ">
        <header class="text-center">
            <h1 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Download Your Custom Biz Cards
            </h1>


        </header>
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="flex flex-col items-center justify-center  gap-8">
                <img class="h-4/5"
                    src="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
                    alt="{{ $listing->business_name }} QR Code" />

                <a download="{{ $listing->business_name }}_qr.svg"
                    href="{{ $listing->qr ? asset('storage/' . $listing->qr) : asset('/images/no-image.png') }}"
                    class="w-1/5 text-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-lg px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                    Download QR
                </a>

            </div>
            <hr>
            <div class="my-5 text-center">
                <p class="mb-4 font-light text-gray-500 sm:text-lg dark:text-gray-400"> Or choose the layout that suits
                    your
                    needs.</p>
            </div>
            <!-- Row -->
            <!-- Row -->
            <div class="items-center flex flex-col-reverse gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">1. Get Your
                        Digital Business Card in Card Format</h2>
                    <p class="mb-8 font-light lg:text-xl">Share Your Contact Information Seamlessly</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Professional Presentation:
                            </span>
                            <span class="text-sm col-start-2">
                                Present your contact details in a sleek,
                                professional format, perfect for face-to-face networking.
                            </span>
                        </li>

                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Print and Share:
                            </span>
                            <span class="text-sm col-start-2">
                                Easily print your card and share it in physical meetings or events, ensuring you make a
                                memorable impression.
                            </span>
                        </li>
                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Digital Sharing:
                            </span>
                            <span class="text-sm col-start-2">
                                Share your digital card via email, messaging apps, or social media for convenient online
                                networking.
                            </span>
                        </li>

                    </ul>
                    <p class="mb-8 font-light lg:text-xl">With our card format, you can present your business card
                        professionally in person, whether at meetings, conferences, or networking events. It's an
                        excellent option for physical encounters where you want to leave a lasting impression.</p>
                </div>
                <div class="flex flex-col items-center space-y-3">

                    <x-biz-card :listing="$listing" />
                    <button id="download-card-button"
                        class="w-2/4 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-lg px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                        Download
                    </button>

                </div>
            </div>
            <!-- Row -->
            <div class="items-center flex flex-col gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="flex flex-col items-center space-y-3">
                    <x-portrait-card :listing="$listing" />
                    <button id="download-portrait-card-button"
                        class="w-2/4  text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-lg px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">
                        Download
                    </button>
                </div>
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">2. Download
                        Your
                        Digital Business Card in Portrait Layout</h2>
                    <p class="mb-8 font-light lg:text-xl">Expand Your Networking Possibilities</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Versatile Printing:
                            </span>
                            <span class="text-sm col-start-2">
                                Print and stick your portrait layout card on various surfaces like your office desk,
                                laptop, or even the back of your smartphone.
                            </span>
                        </li>
                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Quick QR Scanning:
                            </span>
                            <span class="text-sm col-start-2">
                                Easily allow others to scan your QR code, granting them access to your contact details,
                                website, and social media profiles.
                            </span>
                        </li>
                        <li class="grid gap-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                Ideal for Digital Sharing:
                            </span>
                            <span class="text-sm col-start-2">
                                Share your portrait layout card digitally for online connections, making it effortless
                                for others to access your information with a quick scan.
                            </span>
                        </li>
                    </ul>
                    <p class="font-light lg:text-xl">The portrait layout is designed for versatile use. It's perfect
                        for
                        printing and sticking on various surfaces or for quickly sharing your contact details digitally.
                        It's a convenient way to expand your networking possibilities.</p>
                </div>
            </div>
        </div>
    </div>
    <x-download-card :listing="$listing" />
    <x-download-portrait-card :listing="$listing" />

</x-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the download button and biz card div
        var downloadButton = document.getElementById('download-card-button');
        var downloadCardDiv = document.getElementById('biz-card');

        // Add a click event listener to the download button
        downloadButton.addEventListener('click', function() {
            downloadCardDiv.style.display = 'grid';
            // Use html2canvas to capture the #biz-card div as an image
            html2canvas(downloadCardDiv).then(function(canvas) {
                // Convert the canvas to a data URL
                var imageDataURL = canvas.toDataURL('image/png');

                // Create a temporary anchor element to trigger the download
                var downloadLink = document.createElement('a');
                downloadLink.href = imageDataURL;
                downloadLink.download = 'biz-card.png';
                downloadLink.click();
                downloadCardDiv.style.display = 'none';
            });
        });

        var downloadButton = document.getElementById('download-portrait-card-button');
        var downloadCardDiv = document.getElementById('portrait-biz-card');

        // Add a click event listener to the download button
        downloadButton.addEventListener('click', function() {
            downloadCardDiv.style.display = 'grid';
            // Use html2canvas to capture the #biz-card div as an image
            html2canvas(downloadCardDiv).then(function(canvas) {
                // Convert the canvas to a data URL
                var imageDataURL = canvas.toDataURL('image/png');

                // Create a temporary anchor element to trigger the download
                var downloadLink = document.createElement('a');
                downloadLink.href = imageDataURL;
                downloadLink.download = 'biz-card.png';
                downloadLink.click();
                downloadCardDiv.style.display = 'none';
            });
        });
    });
</script>
