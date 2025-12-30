@extends('layouts.app')

@section('content')
    {{-- @include('daisyUI.hero') --}}

    <x-hero title="{{ __('adminlte::landingpage.aboutcompany') }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%] sm:w-[90%] mx-auto ">

        <x-divider>{{ $posts[0]->postDetailOne->title }} </x-divider>
        <div class="text-center sm:m-10 mt-0" data-aos="fade-up" data-aos-delay="100">
            <p class="text-sm font-semibold sm:text-lg text-gray-700 mt-4">
                {!! $posts[0]->postDetailOne->content !!}
            </p>
        </div>

        <x-divider>{{  __('adminlte::landingpage.values')  }}</x-divider>
        <section class=" px-4 bg-base-100 justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:inline-grid lg:grid-cols-3 lg:justify-center gap-6">
                @foreach ($posts->skip(1) as $post)
                    <x-icon-card title="{{ $post->postDetailOne->title }}" icon="{{ $post->postDetailOne->color }}"
                        description="{{ $post->postDetailOne->content }}" />
                @endforeach
            </div>
        </section>
    </div>
@endsection
@section('jsafter')
    {{-- <livewire:carousel />  --}}
@endsection
