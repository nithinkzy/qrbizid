@php
    $meta = [
        'title' => 'QrBizID - Empower Your Online Presence with QR',
        'description' => 'Create and manage digital business cards, share contact details instantly with QR codes, and boost your business reach with QrBizID.',
    ];
@endphp

<x-layout :meta="$meta">

    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
