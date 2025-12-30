@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="w-[95%] mx-auto space-y-10 sm:space-y-10" data-aos="fade-up" data-aos-duration="700">


    </div>
    
@endsection
@section('jsafter')
@endsection
