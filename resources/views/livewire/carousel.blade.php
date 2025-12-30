{{-- <div 
    x-data="{ current: 0, slides: {{ json_encode($slides) }} }"
    x-init="setInterval(() => { current = (current + 1) % slides.length }, 3000)"
    class="carousel w-full overflow-hidden relative"
>
    <template x-for="(slide, index) in slides" :key="slide.id">
        <div
            class="carousel-item absolute w-full transition-opacity duration-700"
            x-show="current === index"
            x-transition
        >
            <img :src="slide.image" class="w-full object-cover h-[400px]" />
        </div>
    </template>

    <div class="absolute left-5 right-5 top-1/2 flex justify-between transform -translate-y-1/2">
        <button class="btn btn-circle" @click="current = (current - 1 + slides.length) % slides.length">❮</button>
        <button class="btn btn-circle" @click="current = (current + 1) % slides.length">❯</button>
    </div>
</div> --}}
