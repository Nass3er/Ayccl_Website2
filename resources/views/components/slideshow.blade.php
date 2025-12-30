{{-- @props(['slideshows'])

<section
    class="relative group flex flex-col h-screen w-full justify-center items-center overflow-hidden cursor-grab select-none"
    id="slideshow-container"
>
    <!-- Slideshow Image Stack -->
    <div class="relative h-full w-full overflow-hidden">
        @foreach ($slideshows as $index => $slideshow)
            <img src="{{ asset($slideshow->image) }}"
                class="slideshow-image absolute top-0 left-0 h-full w-full object-cover rounded-medium transition-transform duration-700 ease-in-out"
                data-text="{{ $slideshow->text }}"
                style="transform: translateX({{ $loop->index === 0 ? '0%' : '100%' }}); z-index: {{ $loop->index === 0 ? '10' : '0' }};"
            />
        @endforeach
    </div>

    <!-- Gradient overlay + Text + Dots -->
    <div class="absolute inset-0 z-20">
        <div class="absolute bottom-0 left-0 w-full h-[75%] sm:h-[65%] bg-gradient-to-t from-black to-transparent rounded-medium"></div>

        <div class="absolute flex flex-col lg:flex-row inset-6 sm:inset-8 md:inset-10 lg:inset-11 justify-end lg:justify-between lg:items-end">
            <p id="slideshow-text"
               class="text-white text-[31px] sm:text-[36px] md:text-[47px] lg:text-[58px] font-medium ltr:text-left rtl:text-right leading-tight">
               {{ $slideshows[0]->text }}
            </p>

            <div class="flex gap-x-2.5 sm:gap-x-3.5 mt-3.5 sm:mt-4 lg:mt-0" id="slideshow-dots">
                @foreach ($slideshows as $index => $slideshow)
                    <div
                        class="slideshow-dot cursor-pointer w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 rounded-full transition duration-[1500ms] {{ $loop->first ? 'bg-white opacity-100' : 'bg-white opacity-30' }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = Array.from(document.querySelectorAll('.slideshow-image'));
        const dots = document.querySelectorAll('.slideshow-dot');
        const textBox = document.getElementById('slideshow-text');
        const container = document.getElementById('slideshow-container');

        let current = 0;
        const duration = 5000;
        let timer;

        function resetImages() {
            images.forEach((img, index) => {
                img.style.transition = 'none';
                img.style.transform = index === current ? 'translateX(0%)' : 'translateX(100%)';
                img.style.zIndex = index === current ? 10 : 0;
            });
        }

        function showSlide(newIndex, direction = 1) {
            if (newIndex === current) return;

            const currentImage = images[current];
            const newImage = images[newIndex];

            // Prep next image position
            newImage.style.transition = 'none';
            newImage.style.transform = `translateX(${direction * 100}%)`;
            newImage.style.zIndex = 10;

            // Animate in next frame
            requestAnimationFrame(() => {
                // Animate both
                currentImage.style.transition = 'transform 0.7s ease-in-out';
                newImage.style.transition = 'transform 0.7s ease-in-out';

                currentImage.style.transform = `translateX(${-direction * 100}%)`;
                newImage.style.transform = 'translateX(0%)';

                // After animation, reset positions
                setTimeout(() => {
                    images.forEach((img, i) => {
                        if (i !== newIndex) {
                            img.style.transition = 'none';
                            img.style.transform = 'translateX(100%)';
                            img.style.zIndex = 0;
                        }
                    });
                    newImage.style.zIndex = 10;
                    current = newIndex;
                    textBox.innerHTML = newImage.getAttribute('data-text').replace(/\n/g, '<br>');

                    // Update dots
                    dots.forEach(dot => dot.classList.replace('opacity-100', 'opacity-30'));
                    dots[current].classList.replace('opacity-30', 'opacity-100');
                }, 700);
            });
        }

        function nextSlide() {
            const prev = (current - 1 + images.length) % images.length;
            showSlide(prev, -1);
        }
        
        function prevSlide() {
            const next = (current + 1) % images.length;
            showSlide(next, 1);
        }

        function startTimer() {
            timer = setInterval(nextSlide, duration);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        // Start everything
        resetImages();
        startTimer();

        // Dot click
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopTimer();
                showSlide(index, index > current ? 1 : -1);
                startTimer();
            });
        });

        // Swipe/drag handling
        let startX = 0;
        let isDragging = false;

        function onDragStart(e) {
            isDragging = true;
            startX = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
        }

        function onDragEnd(e) {
            if (!isDragging) return;
            isDragging = false;

            const endX = e.type.includes('mouse') ? e.clientX : e.changedTouches[0].clientX;
            const diff = endX - startX;

            if (Math.abs(diff) > 50) {
                stopTimer();
                diff > 0 ? prevSlide() : nextSlide();
                startTimer();
            }
        }

        container.addEventListener('mousedown', onDragStart);
        container.addEventListener('mouseup', onDragEnd);
        container.addEventListener('touchstart', onDragStart);
        container.addEventListener('touchend', onDragEnd);
    });
</script> --}}


{{-- @props(['slideshows'])

<section
    class="relative group flex flex-col h-screen w-full justify-center items-center overflow-hidden cursor-grab select-none"
    id="slideshow-container"
>
    <!-- Slideshow Image Stack -->
    <div class="relative h-full w-full overflow-hidden">
        @foreach ($slideshows as $index => $slideshow)
            <img src="{{ asset($slideshow->image) }}"
                class="slideshow-image absolute top-0 left-0 h-full w-full object-cover rounded-medium transition-transform duration-700 ease-in-out"
                data-text="{{ $slideshow->text }}"
                style="transform: translateX({{ $loop->index === 0 ? '0%' : '100%' }}); z-index: {{ $loop->index === 0 ? '10' : '0' }};"
            />
        @endforeach
    </div>

    <!-- Gradient overlay + Text + Dots -->
    <div class="absolute inset-0 z-20">
        <div class="absolute bottom-0 left-0 w-full h-[75%] sm:h-[65%] bg-gradient-to-t from-black to-transparent rounded-medium"></div>

        <div class="absolute flex flex-col lg:flex-row inset-6 sm:inset-8 md:inset-10 lg:inset-11 justify-end lg:justify-between lg:items-end">
            <p id="slideshow-text"
               class="text-white text-[31px] sm:text-[36px] md:text-[47px] lg:text-[58px] font-medium ltr:text-left rtl:text-right leading-tight">
               {{ $slideshows[0]->text }}
            </p>

            <div class="flex gap-x-2.5 sm:gap-x-3.5 mt-3.5 sm:mt-4 lg:mt-0" id="slideshow-dots">
                @foreach ($slideshows as $index => $slideshow)
                    <div
                        class="slideshow-dot cursor-pointer w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 rounded-full transition duration-[1500ms] {{ $loop->first ? 'bg-white opacity-100' : 'bg-white opacity-30' }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = Array.from(document.querySelectorAll('.slideshow-image'));
        const dots = document.querySelectorAll('.slideshow-dot');
        const textBox = document.getElementById('slideshow-text');
        const container = document.getElementById('slideshow-container');

        let current = 0;
        const duration = 5000;
        let timer;

        function resetImages() {
            images.forEach((img, index) => {
                img.style.transition = 'none';
                img.style.transform = index === current ? 'translateX(0%)' : 'translateX(100%)';
                img.style.zIndex = index === current ? 10 : 0;
            });
        }

        function showSlide(newIndex, direction = 1) {
            if (newIndex === current) return;

            const currentImage = images[current];
            const newImage = images[newIndex];

            // Prep next image position
            newImage.style.transition = 'none';
            newImage.style.transform = `translateX(${direction * 100}%)`;
            newImage.style.zIndex = 10;

            // Animate in next frame
            requestAnimationFrame(() => {
                // Animate both
                currentImage.style.transition = 'transform 0.7s ease-in-out';
                newImage.style.transition = 'transform 0.7s ease-in-out';

                currentImage.style.transform = `translateX(${-direction * 100}%)`;
                newImage.style.transform = 'translateX(0%)';

                // After animation, reset positions
                setTimeout(() => {
                    images.forEach((img, i) => {
                        if (i !== newIndex) {
                            img.style.transition = 'none';
                            img.style.transform = 'translateX(100%)';
                            img.style.zIndex = 0;
                        }
                    });
                    newImage.style.zIndex = 10;
                    current = newIndex;
                    textBox.innerHTML = newImage.getAttribute('data-text').replace(/\n/g, '<br>');

                    // Update dots
                    dots.forEach(dot => dot.classList.replace('opacity-100', 'opacity-30'));
                    dots[current].classList.replace('opacity-30', 'opacity-100');
                }, 700);
            });
        }

        function nextSlide() {
            const next = (current + 1) % images.length;
            showSlide(next, 1);
        }

        function prevSlide() {
            const prev = (current - 1 + images.length) % images.length;
            showSlide(prev, -1);
        }

        function startTimer() {
            timer = setInterval(nextSlide, duration);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        // Start everything
        resetImages();
        startTimer();

        // Dot click
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopTimer();
                showSlide(index, index > current ? 1 : -1);
                startTimer();
            });
        });

        // Swipe/drag handling
        let startX = 0;
        let isDragging = false;

        function onDragStart(e) {
            isDragging = true;
            startX = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
        }

        function onDragEnd(e) {
            if (!isDragging) return;
            isDragging = false;

            const endX = e.type.includes('mouse') ? e.clientX : e.changedTouches[0].clientX;
            const diff = endX - startX;

            if (Math.abs(diff) > 50) {
                stopTimer();
                diff > 0 ? prevSlide() : nextSlide();
                startTimer();
            }
        }

        container.addEventListener('mousedown', onDragStart);
        container.addEventListener('mouseup', onDragEnd);
        container.addEventListener('touchstart', onDragStart);
        container.addEventListener('touchend', onDragEnd);
    });
</script> --}}


@props(['slideshows'])

<section class="relative group flex flex-col mt-24 sm:mt-0 h-100 sm:h-screen w-full justify-center items-center overflow-hidden select-none"
    id="slideshow-container">
    <!-- Slideshow Image Stack -->
    <div class="relative h-full w-full overflow-hidden">
        @foreach ($slideshows as $slideshow )
            <img src="{{ asset($slideshow->mediaOne->filepath) }}"
            class="slideshow-image h-[125%] sm:w-full object-cover rounded-medium absolute transition-opacity duration-[1500ms] ease-in-out 
            {{ $loop->iteration == 1 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
            
            @php
                // 1. Define the optional link HTML using a pure PHP ternary operator
                $linkHtml = isset($slideshow->mediaOne->link)
                    ? ' <a class="bg-white text-emerald-900 rounded-4xl text-lg md:text-2xl px-2" href="' . url($slideshow->mediaOne->link) . '">المزيد.. </a>'
                    : '';
                
                // 2. Build the final HTML string using the optional link
                $textContent = '<span class="text-lg sm:text-3xl lg:text-5xl">' 
                               . $slideshow->postDetailOne->title 
                               . $linkHtml 
                               . '</span>';
            @endphp
            
            data-text="{{ $textContent }}"
        />
        @endforeach
    </div>
    

    <!-- Gradient overlay + Text + Dots -->
    <div class="absolute inset-0 z-20">
        <!-- Gradient overlay -->
        <div
            class="absolute -top-20 left-0 w-full h-[55%] sm:h-[45%] 
        bg-gradient-to-b from-gray-900 to-transparent rounded-medium">
        </div>
        <div
            class="absolute -bottom-20 left-0 w-full h-[75%] sm:h-[65%] 
        bg-gradient-to-t from-black to-transparent rounded-medium">
        </div>

        <!-- Text + dots -->
        <div class="absolute flex flex-col inset-6 justify-end">
            <p id="slideshow-text"
                class="text-white  hover:bg-black/25 transition-all duration-300 sm:py-5 font-medium ltr:text-left rtl:text-right leading-tight">
                {{-- {{ $slideshows->postDetail[0]->title }} --}}
            </p>
            {{-- <a id="show-more" href="#"
                class="btn flex bg-transparent text-white hover:bg-emerald-800 border-gray-400 p-5 mt-2 w-fit">
                {{ __('adminlte::landingpage.showMore') }}
            </a> --}}

            <div class="flex gap-x-2.5 sm:gap-x-3.5 mt-3.5 sm:mt-4 justify-center" id="slideshow-dots">
                @foreach ($slideshows as $index => $slideshow)
                    <div
                        class="slideshow-dot cursor-pointer w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 rounded-full transition duration-[1500ms] {{ $loop->first ? 'bg-emerald-300 opacity-100' : 'bg-emerald-300 opacity-30' }}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Left/Right Arrows -->
        <button id="prev-slide"
            class="absolute cursor-pointer h-1/4 transition-all duration-300 start-0 sm:start-4 top-1/2 sm:top-1/2 -translate-y-1/2 bg-black/10  hover:bg-black/60 text-white p-5 rounded-2xl">
            @if (app()->getLocale() == 'ar')
                <x-heroicon-m-arrow-right class="h-5 w-5" />
            @else
                <x-heroicon-m-arrow-left class="h-5 w-5" />
            @endif

        </button>
        <button id="next-slide"
            class="absolute cursor-pointer h-1/4 transition-all duration-300  end-0 sm:end-4 top-1/2 sm:top-1/2 -translate-y-1/2 bg-black/15  hover:bg-black/60 text-white p-5 rounded-2xl">

            @if (app()->getLocale() != 'ar')
                <x-heroicon-m-arrow-right class="h-5 w-5" />
            @else
                <x-heroicon-m-arrow-left class="h-5 w-5" />
            @endif
        </button>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const images = document.querySelectorAll(".slideshow-image");
        const dots = document.querySelectorAll(".slideshow-dot");
        const textBox = document.getElementById("slideshow-text");
        const button = document.getElementById("show-more");
        const prevBtn = document.getElementById("prev-slide");
        const nextBtn = document.getElementById("next-slide");

        let current = 0;
        const duration = 5000;
        let timer;

        function updateSlide(index) {
            images.forEach((img, i) => {
                img.classList.toggle("opacity-100", i === index);
                img.classList.toggle("z-10", i === index);
                img.classList.toggle("opacity-0", i !== index);
                img.classList.toggle("z-0", i !== index);
                dots[i].classList.toggle("opacity-100", i === index);
                dots[i].classList.toggle("opacity-30", i !== index);
            });

            textBox.innerHTML = images[index].dataset.text.replace(/\n/g, "<br>");
            // console.log(images[index].dataset.link);
            // button.setAttribute("href", images[index].dataset.link );
            current = index;
        }

        function nextSlide() {
            updateSlide((current + 1) % images.length);
        }

        function prevSlide() {
            updateSlide((current - 1 + images.length) % images.length);
        }

        function startTimer() {
            timer = setInterval(nextSlide, duration);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        // Init slideshow
        updateSlide(0);
        startTimer();

        // Dot click events
        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                stopTimer();
                updateSlide(i);
                startTimer();
            });
        });

        // Arrow click events
        nextBtn.addEventListener("click", () => {
            stopTimer();
            nextSlide();
            startTimer();
        });

        prevBtn.addEventListener("click", () => {
            stopTimer();
            prevSlide();
            startTimer();
        });
    });
</script>
