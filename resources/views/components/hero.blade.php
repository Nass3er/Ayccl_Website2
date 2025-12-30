<div class="hero h-[30rem] max-h-screen lg:h-150 bg-center bg-cover" style="background-image: url( {{ $img }} );">

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
</div>
