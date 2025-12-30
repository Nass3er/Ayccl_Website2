@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%] mx-auto space-y-10 sm:space-y-10" data-aos="fade-up" data-aos-duration="700">

        {{-- Location Section --}}
        @include('daisyUI.address-map')
        {{-- <div class="flex flex-col sm:flex-row items-center gap-6">
            <div class="w-full lg:w-1/2 space-y-3 lg:ps-[5%]">
                @foreach ($posts as $post)
                    <x-text-icon :post="$post" />
                @endforeach
            
            </div>
            @isset($map)
                <div class="w-full lg:w-1/2 text-center space-y-4 tooltip tooltip-bottom">
                    <h2 class="text-2xl font-bold">{{ __('adminlte::landingpage.ourlocation') }}:</h2>
                    <div class="aspect-video w-full rounded-xl overflow-hidden shadow-lg">
                            <iframe class="w-full h-full"
                                src="{{ $map->postDetailOne->content }}"
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                    </div>
                </div>
            @endisset
        </div> --}}

        
        @include('daisyUI.social-media')
        
        {{-- <x-divider>{{ __('adminlte::landingpage.socialmediainfo') }}</x-divider> --}}
        {{-- Video + Facebook Section --}}
        {{-- <div class="flex flex-col md:flex-row items-center md:justify-between lg:gap-6 mt-10">

            <div class="aspect-video w-full md:w-2/3 md:h-96 lg:h-full shadow-lg rounded-lg overflow-hidden">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/AFLU0b_eyRM?si=dRj2z62SXZBBsbLg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
            <div class="w-auto lg:w-auto h-96 mt-10 sm:m-0 sm:h-full shadow-lg rounded-lg overflow-hidden">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAYCCLYemen%2F&tabs=timeline&width=310&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                    width="310" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>

        </div> --}}

        {{-- Playlist Grid --}}
        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-10">
            @for ($i = 0; $i < 5; $i++)
                <div class="card shadow-lg border border-amber-300 rounded-lg overflow-hidden">
                    <div class="aspect-video w-full">
                        <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed?listType=playlist&list=UUIR8pAQBIdH-wS0Z06UPpQA&index={{ $i }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            @endfor
        </div> --}}
    </div>
    
@endsection
@section('jsafter')
@endsection
