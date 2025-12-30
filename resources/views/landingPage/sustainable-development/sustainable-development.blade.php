@extends('layouts.app')

@section('content')

<x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />
    
    <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto " data-aos="fade-up"  data-aos-duration="700">
        
    </div>


@endsection