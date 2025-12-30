@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%]  lg:w-[90%] mx-auto mt-20  ">
        @isset($posts)
            @php
                // Check if any posts have images
                $hasAnyImages = $posts->contains(function($post) {
                    return isset($post->mediaOne);
                });
            @endphp

            @if ($hasAnyImages)
                {{-- Original alternating layout for posts with images --}}
                <div class="space-y-30" data-aos="fade-up" data-aos-duration="700">
                    @foreach ($posts as $index => $post)
                        @php
                            $isEven = $index % 2 === 0;
                            $dir = session('locale') == 'ar' ? 1 : 2;
                            $dir = ($dir + $isEven) % 2 == 0 ? 1 : 0;
                            $img = isset($post->mediaOne) ? 1 : 0;
                        @endphp

                        @if ($img)
                            <div class=" bg-base-100 shadow-lg m-10 lg:w-[90%] justify-center mx-auto">
                                <figure class="w-full lg:w-[60%] relative order-1 {{ $isEven ? 'lg:order-2' : 'lg:order-1' }}">
                                    <img src="{{ asset($post->description) }}" alt="{{ $post->title }}" />
                                    <div
                                        class="absolute 
                                         {{ $dir == 1 ? 'bg-gradient-to-l left-[60%]' : 'bg-gradient-to-r right-[60%]' }}   
                                        from-green-900 to-transparent rounded-medium">
                                    </div>
                                </figure>

                                <div
                                    class="card-body my-auto space-y-10 w-full lg:w-[40%] {{ $isEven ? 'order-1' : 'order-2' }}">
                                    @foreach ($post->postDetail as $postDetail)
                                        <h2 class="card-title text-2xl xl:text-5xl text-green-900 text-center">{{ $postDetail->title }}
                                        </h2>
                                        @if ($postDetail->category_id == 1)
                                            <p class="text-md xl:text-xl space-y-4">
                                                {{ $postDetail->content }}
                                            </p>
                                        @else
                                            <ol class="text-md xl:text-xl space-y-4">
                                                {!! $postDetail->content !!}
                                            </ol>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                {{-- Grid layout for posts without images --}}
                <div class="grid gap-6" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                    @foreach ($posts as $index => $post)
                        @php
                            // Determine content length and set grid span accordingly
                            $contentLength = 0;
                            $colors = ['primary', 'info', 's-gray-500', 'warning']; 
                            $color = $colors[$index % count($colors)];
                            $detailCount = count($post->postDetail);
                            foreach ($post->postDetail as $index => $postDetail) {
                                $contentLength += strlen($postDetail->title) + strlen($postDetail->content);
                            }
                            // Large content: full row, Medium content: half row, Small content: third row
                            $isLargeContent = $contentLength > 800 || $detailCount > 3;
                            $isMediumContent = $contentLength > 400 || $detailCount > 2;
                        @endphp
                        <div class="bg-base-100 border-s-4  border-{{ $color }} shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300 min-h-fir h-full {{ $isLargeContent ? 'col-span-full' : ($isMediumContent ? 'md:col-span-2' : '') }}">
                            @foreach ($post->postDetail as $postDetail)
                                <h2 class="card-title text-xl xl:text-3xl text-green-900 text-center mb-4">{{ $postDetail->title }}</h2>
                                @if ($postDetail->category_id == 1)
                                    <p class="text-sm xl:text-lg text-gray-700 leading-relaxed">
                                        {!! $postDetail->content !!}
                                    </p>
                                @else
                                    <ol class="text-sm xl:text-lg text-gray-700 leading-relaxed list-decimal list-inside space-y-2">
                                        {!! $postDetail->content !!}
                                    </ol>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
        @endisset
    </div>

    {{-- @include('daisyUI.footer') --}}
@endsection
@section('jsafter')
@endsection
