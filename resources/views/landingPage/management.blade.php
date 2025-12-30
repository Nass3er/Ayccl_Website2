@extends('layouts.app')

@section('content')


    <x-hero title="{{ __('adminlte::landingpage.management') }}" description="" img="{{ asset('images/news1.png') }}" />
    <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto "  data-aos="fade-up"
    data-aos-once="false" data-aos-duration="700">
    <x-divider>
        {{ __('adminlte::landingpage.managementspeach') }}
    </x-divider>
        <div class="w-3/4 mx-auto m-20 h-auto">
            <div class="card lg:card-side ">
                {{-- <figure> --}}
                    <img src="{{ $workers[0]->pimage }}" 
                    class="rounded-ss-2xl border-2 border-green-800 box-decoration-slice"
                    alt="Album" />
                {{-- </figure> --}}
                <div class="card-body h-3/4 my-auto bg-green-900 bg-opacity-50 text-white"  data-aos="fade-right"
                data-aos-once="false" data-aos-duration="700">
                    <p  data-aos="fade-up"
                    data-aos-once="false" data-aos-duration="1000" >{!! $workers[0]->description !!}</p>
                    <p class= " text-lg text-center ">{!! $workers[0]->pname !!}</p>
                    <p class= " text-base text-center">{!! $workers[0]->work !!}</p>
                    
                </div>
            </div>
        </div>
        <x-divider>
            {{ $details->deviderTitle }}
        </x-divider>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center px-4">
            @foreach ($workers as $worker)
                <x-management-card 
                :id="$worker->id" 
                :name="$worker->pname" 
                :work="$worker->work" 
                :image="asset($worker->pimage)" 
                 />
            @endforeach
        </div>
    </div>

@endsection
@section('jsafter')
    {{-- <livewire:carousel />  --}}
@endsection
