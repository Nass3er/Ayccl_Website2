{{-- <div class="hero h-[30rem] max-h-screen lg:h-150 bg-center bg-cover" style="background-image: url( {{ $img }} );">

    <div class="hero-overlay backdrop-hue-rotate-180"></div>

    <div class="hero-content mt-20 p-0 sm:p-3 text-neutral-content text-center">
        <div class="max-w-full px-4" data-aos="fade-right" data-aos-delay="300">
            <h1 class="mb-5 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                {{ $title ?? 'Default Title' }}
            </h1>
            @if (isset($description))
                <p class="sm:mb-5 mx-0 text-lg sm:text-xl md:text-2xl lg:text-3xl">
                    {!! nl2br($description) !!}
                </p>

            @endif
        </div>
    </div>
</div> --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Changa:wght@400;700;800&display=swap');

    .hero{
        font-family: 'Changa', sans-serif;
    }
</style>

<div class="hero relative h-[30rem] max-h-screen lg:h-150 bg-center bg-cover overflow-hidden" style="background-image: url( {{ $img }} );">

    <div class="hero-overlay backdrop-hue-rotate-180"></div>

    <div class="hero-content mt-20 p-0 sm:p-3 text-neutral-content text-center z-10">
        <div class="max-w-full px-4" data-aos="fade-right" data-aos-delay="300">
            <h1 class="mb-5 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                {{ $title ?? 'Default Title' }}
            </h1>
            @if (isset($description))
                <p class="sm:mb-5 mx-0 text-lg sm:text-xl md:text-2xl lg:text-3xl">
                    {!! nl2br($description) !!}
                </p>
            @endif
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
        <svg class="relative block w-full h-[100px] md:h-[180px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">

            <path d="M0,30 C150,130 350,0 600,70 C850,140 1050,30 1200,90 L1200,120 L0,120 Z" fill="#000000"></path>

            <path d="M0,50 C150,140 350,20 600,85 C850,150 1050,50 1200,105 L1200,120 L0,120 Z" fill="#ffffff"></path>

            <path d="M0,75 C150,155 350,45 600,105 C850,165 1050,85 1200,120 L1200,120 L0,120 Z" fill="#2D843D"></path>

        </svg>
    </div>


</div>
