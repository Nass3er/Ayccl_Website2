@extends('layouts.app')
@section('css')
@endsection
@section('content')

<x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />
    
    {{-- <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto " data-aos="fade-up"
        data-aos-duration="700">

        <div class="card sm:card-side bg-base-100 shadow-lg m-10 lg:w-[90%] justify-center mx-auto">
            <div class="card-body my-auto space-y-10 w-full sm:w-[40%]">
                <h2 class="card-title text-5xl text-green-900 text-center">{{ $posts[0]->title }}</h2>
                <p class="card-title text-xl">{{ $posts[0]->content }}</p>
            </div>
            <figure class="w-full sm:w-[60%] relative ">
                <img src="{{ asset($posts[0]->description) }}" alt="{{ $posts[0]->title }}" />
                <div
                    class="absolute 
                    {{ app()->getlocale() =='ar' ? 'bg-gradient-to-l left-[60%]  ' : 'bg-gradient-to-r right-[60%]  ' }} from-green-900 to-transparent 
                    rounded-medium">
                </div>
            </figure>
        </div>
    </div> --}}


@endsection
@section('jsafter')
@endsection