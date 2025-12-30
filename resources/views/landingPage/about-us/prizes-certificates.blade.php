@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@endsection
@section('content')

<x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />
    
    <div class="w-[95%] sm:w-[90%] mx-auto  " data-aos="fade-up"
        data-aos-duration="700">

        <x-divider>{{ __('adminlte::landingpage.isoCertificates') }}</x-divider>
        {{-- <div class="my-10">

            <x-iso-carousel :posts="$posts" style="w-20 h-20" />
        </div> --}}

        <div class="flex flex-wrap gap-2 my-5 justify-center w-full ">
            @foreach ($posts as $post)
                @if (isset($post->mediaOne))
                    <x-document-cards :post="$post" />
                @endif
            @endforeach
        </div>

    </div>


@endsection
@section('jsafter')


@endsection