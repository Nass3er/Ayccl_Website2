<div class="max-w-sm mx-fit justify-content text-center group " data-aos="fade-up"
     data-aos-duration="700" >
    {{-- Gray bottom background layer (half card height) --}}

    {{-- Image section: stands out, partially over gray --}}
    <div class="w-full h-70 mb-4 flex justify-center   ">
        <img src="{{ $image }}" alt="{{ $name }}" class="max-h-full border-4 border-green-800/60 transition-all duration-300 ease-in-out group-hover:shadow-xl group-hover:scale-102 group-hover:border-green-800 rounded-full" />
    </div>
    
    <h4 class="text-base font-semibold mb-2 font-30 text-gray-900">{{ $name }}</h4>
    <h5 class="text-sm font-semibold mb-2 text-green-700">{{ $work }}</h5>
    {{-- Name --}}

    {{-- Button --}}
</div>
