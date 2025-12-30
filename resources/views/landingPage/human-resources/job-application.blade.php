@extends('layouts.app')
@section('css')
@endsection
@section('content')

    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%]w-[90%] mx-auto ">

        @isset($posts)
            <div class="space-y-30" data-aos="fade-up" data-aos-duration="700">
                @foreach ($posts as $index => $post)
                
                        @php
                            $isEven = $index % 2 === 0;
                            $dir = session('locale') == 'ar' ? 1 : 2;
                            $dir = ($dir + $isEven) % 2 == 0 ? 1 : 0;
                        @endphp

                        <div class="card lg:card-side bg-base-100 shadow-lg m-10 lg:w-[90%] justify-center mx-auto">

                            @if (isset($post->description))
                                <figure class="w-full lg:w-[60%] relative order-1 {{ $isEven ? 'lg:order-2' : 'lg:order-1' }}">
                                    <img src="{{ asset($post->description) }}" alt="{{ $post->title }}" />
                                    <div
                                        class="absolute 
                                     {{ $dir == 1 ? 'bg-gradient-to-l left-[60%]' : 'bg-gradient-to-r right-[60%]' }}   
                                    from-green-900 to-transparent rounded-medium">
                                    </div>
                                </figure>
                            @endif

                            <div class="card-body my-auto space-y-10 w-full lg:w-[40%] {{ $isEven ? 'order-1' : 'order-2' }}">
                                <h2 class="card-title text-2xl xl:text-5xl text-green-900 text-center">{{ $post->title }}</h2>
                                <ol class="text-md xl:text-xl space-y-4">
                                    {!! html_entity_decode($post->content) !!}
                                </ol>
                            </div>
                        </div>
                    
                        @endforeach
                        <p class="card card-side bg-base-100 shadow-xl border-2 m-10 p-10 border-red-500 font-bold text-2xl">
                        {{ __('adminlte::landingpage.noJobApplication') }}
                        </p>
            </div>
        @endisset



    @endsection
    @section('jsafter')
    @endsection
