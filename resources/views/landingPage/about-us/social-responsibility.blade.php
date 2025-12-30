@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%]  mx-auto mt-20  ">
        @isset($posts)
            <div class="space-y-30" >
                @foreach ($posts as $index => $post)
                    @php
                        $isEven = $index % 2 === 0;
                        $dir = session('locale') == 'ar' ? 1 : 2;
                        $dir = ($dir + $isEven) % 2 == 0 ? 1 : 0;
                    @endphp

                    {{-- <div class="card lg:card-side bg-base-100 shadow-lg m-10 lg:w-[90%] justify-center mx-auto"> --}}
                    <div
                        class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16 my-10  shadow-2xl p-2 lg:p-10 py-20 rounded-4xl
                    {{ $isEven ? 'lg:flex-row-reverse' : 'lg:flex-row' }}" data-aos="fade-up" data-aos-duration="400">

                        {{-- Image --}}
                        @if (isset($post->mediaOne->filepath))
                            <div class="w-full lg:w-1/2 relative">
                                <img src="{{ asset($post->mediaOne->filepath) }}" alt="{{ $post->mediaOne->alt }}"
                                    class="rounded-2xl shadow-lg w-[100%] p-0 m-0 h-80 sm:h-3/4 object-cover" />

                                {{-- Gradient overlay --}}
                                {{-- <div
                                    class="absolute inset-0
                                    {{ $isEven ? 'bg-gradient-to-l from-green-900/20 to-transparent' : 'bg-gradient-to-r from-green-900/20 to-transparent' }}
                                    rounded-2xl pointer-events-none">
                                </div> --}}
                            </div>
                        @endif

                        {{-- <div class="card-body my-auto space-y-10 w-full lg:w-[40%] {{ $isEven ? 'order-1' : 'order-2' }}"> --}}
                        <div class="w-full lg:w-1/2 lg:text-start space-y-6">
                            <h2 class="card-title text-2xl xl:text-5xl text-green-900 text-center">
                                {{ $post->postDetailOne->title }}</h2>
                            <ol class="text-md xl:text-xl space-y-4">
                                {!! ($post->postDetailOne->content) !!}
                            </ol>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset

    </div>


    {{-- @include('daisyUI.footer') --}}
@endsection
@section('jsafter')
@endsection
