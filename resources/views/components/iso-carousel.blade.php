@props(['posts', 'style' => '']) {{-- Added default empty string for $style prop --}}

<style>
    /* Style dots */
    .owl-dots {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .owl-dots .owl-dot span {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #d1d5db;
        /* gray-300 */
        display: block;
        transition: background 0.3s, transform 0.3s;
    }

    .owl-dots .owl-dot.active span {
        background: #0d6836;
        /* emerald-800 equivalent */
        transform: scale(1.2);
    }

    /* Optional: Custom style for nav buttons to ensure layering */
    .owl-carousel .owl-nav button {
        z-index: 20; /* Ensure nav buttons are above items */
    }
</style>

<div>
    <div class="owl-carousel p-3 rounded-2">
        @foreach ($posts as $post)
            <div
                class="item transition-all duration-300 ease-in-out hover:scale-[0.95] hover:z-10 cursor-grab text-center">
                
                {{--
                    KEY CHANGE: Image Wrapper
                    1. w-full: Takes full width of the item.
                    2. h-72: Enforces a fixed height (you can adjust this, e.g., h-64, h-80).
                    3. overflow-hidden: Hides any parts of the image that spill out.
                --}}
                <div class="w-full h-50 overflow-hidden  flex justify-center items-center ">
                    <img 
                        src="{{ asset($post->mediaOne->filepath) }}" 
                        alt="{{ $post->mediaOne->filepath }}"
                        
                        {{-- 
                            UPDATED: Image Styling
                            1. w-full h-full: Makes the image take the entire space of the h-72 wrapper.
                            2. object-contain: Scales the image to fit entirely within the container, preserving its aspect ratio. This may result in empty space (letterboxing/pillarboxing) if aspect ratios don't match.
                        --}}
                        class="w-full h-full object-contain {{ $style }}" 
                    />
                </div>
                
                @if (!empty($post->postDetailOne->title))
                    <p class="mt-2 text-gray-700 font-medium">{{ $post->postDetailOne->title }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>

<script>
    function initCarousel() {
        var owl = jQuery('.owl-carousel');

        owl.owlCarousel('destroy'); // destroy old instance before re-init

        let no = {{ count($posts) }};
        no = no>2? no/2 : no;
        // let isLargeScreen = window.innerWidth >= 1024 && no <= 3; // lg breakpoint
        let isLargeScreen = false; // lg breakpoint

        owl.owlCarousel({
            loop: !isLargeScreen, // stop loop if lg
            margin: 20,
            autoplay: !isLargeScreen, // stop autoplay if lg
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            rtl: document.documentElement.getAttribute('dir') == 'rtl',
            nav: true,
            dots: false,
            navText: [
                '<button class="btn absolute top-1/3 start-0 h-2/6 btn-square btn-lg shadow-2xl bg-gray-800/10 sm:hover:bg-black/25 text-white border-0">❮</button>',
                '<button class="btn absolute top-1/3 end-0 h-2/6 btn-square btn-lg shadow-2xl bg-gray-800/10 sm:hover:bg-black/25 text-white border-0">❯</button>'
            ],
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1024: {
                    items: 4
                }, // lg
            },
        });
    }

    // init on load
    initCarousel();

    // re-init on resize
    window.addEventListener('resize', function() {
        initCarousel();
    });
</script>
