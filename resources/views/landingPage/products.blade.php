@extends('layouts.app')
@section('css')
@endsection
@section('content')
    {{-- @include('daisyUI.navbar-upper')
    @include('daisyUI.navbar') --}}

    <x-hero title="{{ __('adminlte::landingpage.products') }}" description="" img="{{ asset('images/news1.png') }}" />

    <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto ">
        <x-divider>{{ __('adminlte::landingpage.products') }}</x-divider>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center px-4">
            @foreach ($products as $product)
                <x-product-card 
                :id="$product->id" 
                :image="asset($product->pimage)" 
                :name="$product->pname" 
                :detailsUrl="$product->id" />
            @endforeach
        </div>
    </div>



    {{-- @include('daisyUI.footer') --}}
@endsection
@section('jsafter')
@endsection
