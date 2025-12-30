@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <!-- <x-hero title="{{ __('adminlte::landingpage.products') }}" description="" img="{{ asset('/images/news1.png') }}" /> -->

    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />
    <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto " data-aos="fade-up" data-aos-duration="700">

        <div class="card sm:card-side bg-base-100 shadow-lg m-10 lg:w-[90%] justify-center mx-auto">
            <div class="card-body my-auto space-y-10 w-full sm:w-[40%]">
                <h2 class="font-semibold text-5xl text-green-900 text-center">{{ $posts[0]->postDetailOne->title }}</h2>
                <p class="font-semibold  {{ isset($posts[0]->mediaOne->filepath) ? 'text-xl':' text-3xl text-center' }}">{!! $posts[0]->postDetailOne->content !!}</p>
            </div>
            @isset($posts[0]->mediaOne->filepath)
                <figure class="w-full sm:w-[60%] relative ">
                    <img src="{{ asset($posts[0]->mediaOne->filepath) }}" alt="{{ $posts[0]->mediaOne->alt }}" />

                    <div
                        class="absolute 
                    {{ app()->getlocale() == 'ar' ? 'bg-gradient-to-l left-[60%]  ' : 'bg-gradient-to-r right-[60%]  ' }} from-green-900 to-transparent 
                    rounded-medium">
                    </div>
                </figure>
            @endisset
        </div>

        {{-- </figure> --}}
        <div class="bg-base-100 shadow-lg m-15 lg:w-[90%] mx-auto rounded-3xl" {{-- style="background-size: auto ;background-image: url( {{ asset('images/backgrounds/bkgrnd1.png') }} );" --}}>
            <div class="flex flex-col lg:flex-row justify-center items-start gap-8 px-4 py-6">

                {{-- Left Section --}}
                <div class="lg:w-1/2 w-full h-full my-auto">
                    <h2 class="font-semibold text-3xl lg:text-5xl text-green-900 text-center m-2">
                        {{ $posts[1]->postDetailOne->title }}
                    </h2>
                    <p class="font-semibold text-lg lg:text-xl" data-aos="fade-up" data-aos-once="true"
                        data-aos-duration="700">
                        {!! nl2br($posts[1]->postDetailOne->content) !!}
                    </p>
                </div>

                {{-- Right Section --}}
                <div class="lg:w-1/2 w-full">
                    <h2 class="font-semibold text-3xl lg:text-5xl text-green-900 text-center m-2">
                        {{ $posts[2]->postDetailOne->title }}
                    </h2>
                    <ol class="list-disc list-inside mt-4 space-y-2" data-aos="fade-up" data-aos-once="true"
                        data-aos-duration="700">
                        <p class="font-semibold text-lg lg:text-xl" data-aos="fade-up" data-aos-once="true"
                            data-aos-duration="700">
                            {!! nl2br($posts[2]->postDetailOne->content) !!}
                        </p>
                        {{-- @foreach ($posts[2]->postDetail as $post)
                                <li class="text-lg lg:text-xl font-bold">{{ $post->content }}</li>
                        @endforeach --}}
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('jsafter')
@endsection
