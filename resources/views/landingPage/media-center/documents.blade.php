@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <x-divider>{{ __('adminlte::landingpage.download') }}</x-divider>

    <div class="w-[100%]  space-y-32" {{-- data-aos="fade-up"
        data-aos-duration="700" --}}>
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
