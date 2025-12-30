@props(['slideshows'])

<section
    class="relative group flex flex-col h-screen w-full justify-center items-center overflow-hidden cursor-grab select-none"
    id="slideshow-container"
>
    <!-- Slideshow Image Stack -->
    <div class="relative h-full w-full overflow-hidden">
        @foreach ($slideshows as $index => $slideshow)
            <img src="{{ asset($slideshow->image) }}"
                class="slideshow-image h-[125%] w-full object-cover rounded-medium absolute transition-opacity duration-[1500ms] ease-in-out {{ $loop->first ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
                data-text="{{ $slideshow->text }}"
            />
        @endforeach
    </div>

    <!-- Gradient overlay + Text + Dots -->
    <div class="absolute inset-0 z-20">
        <!-- Gradient overlay -->
        <div class="absolute bottom-0 left-0 w-full h-[75%] sm:h-[65%] bg-gradient-to-t from-black to-transparent rounded-medium"></div>

        <!-- Text + dots -->
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
        const images = document.querySelectorAll('.slideshow-image');
        const dots = document.querySelectorAll('.slideshow-dot');
        const textBox = document.getElementById('slideshow-text');
        let current = 0;
        const duration = 5000;
        let timer;

        function showSlide(index) {
            // Hide current
            images[current].classList.remove('opacity-100', 'z-10');
            images[current].classList.add('opacity-0', 'z-0');
            dots[current].classList.remove('opacity-100');
            dots[current].classList.add('opacity-30');

            // Show new
            current = index;
            images[current].classList.remove('opacity-0', 'z-0');
            images[current].classList.add('opacity-100', 'z-10');
            dots[current].classList.remove('opacity-30');
            dots[current].classList.add('opacity-100');

            const text = images[current].getAttribute('data-text');
            textBox.innerHTML = text.replace(/\n/g, '<br>');
        }

        function nextSlide() {
            const next = (current + 1) % images.length;
            showSlide(next);
        }

        function startTimer() {
            timer = setInterval(nextSlide, duration);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        // Start slideshow
        startTimer();

        // Add click event to dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopTimer();
                showSlide(index);
                startTimer();
            });
        });
    });
</script>
