@extends('layouts.app')

@section('content')

    @include('daisyUI.hero')
    <div class="w-[85%] sm:w-[100%] md:w-[80%] lg:w-[90%] mx-auto ">
        <x-divider>
            {{ $details->deviderTitle }}
        </x-divider>
        <div class="text-center m-10 mt-0" data-aos="fade-up" data-aos-delay="100">
            <p class="text-lg text-gray-700 mt-4">
                {{ $details->description }}
            </p>
        </div>

        <x-divider>
            {{ $details->deviderTitle }}
        </x-divider>
        <section class=" px-4 bg-base-100 justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:inline-grid lg:grid-cols-3 lg:justify-center gap-6">

                <x-icon-card title="النزاهة / الأمانة" icon="heroicon-o-shield-check"
                    description="نتعامل مع شركائنا بمصداقية وشفافية وملتزمون بأعلى معايير النزاهة" />
                <x-icon-card title="السلامة المهنية" icon="heroicon-o-user-group"
                    description="نهتم بسلامة عاملينا وموظفينا" />
                <x-icon-card title="الجودة" icon="heroicon-o-cog-6-tooth" description="نتبع أعلى معايير الجودة" />
                <x-icon-card title="الزمالة / الشراكة" icon="heroicon-o-user-plus"
                    description="نثق بشركائنا في النجاح ونعمل معهم كفريق واحد" />
                <x-icon-card title="رضاء العملاء" icon="heroicon-o-face-smile" description="نسعى دائماً لإرضاء عملائنا" />
                <x-icon-card title="المجتمع" icon="heroicon-o-globe-alt"
                    description="نهتم بالمحافظة على بيئتنا ونساهم بفاعلية في خدمة وتطوير مجتمعنا" />
                <x-icon-card title="التكنولوجيا" icon="heroicon-o-light-bulb" description="نسعى بعزم للتطوير والإبتكار" />
                <x-icon-card title="الدقة" icon="heroicon-o-check-circle" description="مبادرون و نهتم بالنتائج" />


            </div>
        </section>
    </div>

@endsection
@section('jsafter')
    {{-- <livewire:carousel />  --}}
@endsection