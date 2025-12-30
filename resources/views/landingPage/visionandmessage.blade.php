@extends('layouts.app')

@section('content')
    {{-- @include('daisyUI.drawer') --}}
    {{-- @include('daisyUI.navbar-upper')
    @include('daisyUI.navbar') --}}
    @include('daisyUI.hero')
    <div class="w-[100%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto " data-aos="fade-up"
    data-aos-once="true" data-aos-duration="700">
        <div class="card card-side bg-base-100 shadow-sm m-10 lg:w-[60%] justify-center mx-auto">
            <div class="card-body my-auto">
                <h2 class="card-title text-5xl text-green-900 text-center">{{ $vissionandmessage[0]->pname }}</h2>
                <p class="card-title text-xl">{{ $vissionandmessage[0]->description }}</p>
            </div>
            <figure class="w-full">
                <img src="{{ $vissionandmessage[0]->pimage }}" alt="{{ $vissionandmessage[0]->pname }}" />
            </figure>
        </div>
        <div class="bg-base-100 shadow-sm m-10 lg:w-[90%] mx-auto" >
            <div class="flex flex-col lg:flex-row justify-center items-start gap-8 px-4 py-6">
        
                {{-- Left Section --}}
                <div class="lg:w-1/2 w-full h-full my-auto" >
                    <h2 class="card-title text-3xl lg:text-5xl text-green-900 text-center m-2">
                        {{ $vissionandmessage[1]->pname }}
                    </h2>
                    <p class="card-title text-lg lg:text-xl" data-aos="fade-right"
                    data-aos-once="true" data-aos-duration="700">
                        {{ $vissionandmessage[1]->description }}
                    </p>
                </div>
        
                {{-- Right Section --}}
                <div class="lg:w-1/2 w-full">
                    <h2 class="card-title text-3xl lg:text-5xl text-green-900 text-center m-2">
                        {{ $goals[0]->name }}
                    </h2>
                    <ol class="list-disc list-inside mt-4 space-y-2" data-aos="fade-left"
                    data-aos-once="true" data-aos-duration="700">
                        @foreach ($goals as $index => $goal)
                            @if ($index !== 0)
                                <li class="text-lg lg:text-xl font-bold">{{ $goal->name }}</li>
                            @endif
                        @endforeach
                    </ol>
                </div>
        
            </div>
        </div>
        
    </div>

    {{-- @include('daisyUI.footer') --}}
@endsection
@section('jsafter')
    {{-- <livewire:carousel />  --}}
@endsection
