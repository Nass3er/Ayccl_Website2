@extends('layouts.app')

@section('content')
    {{-- @include('daisyUI.hero') --}}

    <x-hero title="{{ __('adminlte::landingpage.aboutcompany') }}" description="{{ $page->content }}"
        img="{{ asset($page->background) }}" />

    <div class="w-[95%] sm:w-[90%] mx-auto ">

        {{-- <x-divider>{{ $posts[0]->postDetailOne->title }} </x-divider>
        <div class="text-center sm:m-10 mt-0" data-aos="fade-up" data-aos-delay="100">
            <p class="text-sm font-semibold sm:text-lg text-gray-700 mt-4">
                {!! $posts[0]->postDetailOne->content !!}
            </p>
        </div> --}}

        <x-divider>{{ $posts[0]->postDetailOne->title }}</x-divider>

        <section class="max-w-6xl mx-auto px-4 sm:px-8 mt-10">

            <div class="grid md:grid-cols-2 gap-6">

                {{-- CARD 1 --}}
                <div class="info-card" data-aos="fade-up">
                    <button class="card-toggle">
                        🏭 من نحن
                    </button>
                    <div class="card-content">
                        الشركة العربية اليمنية للأسمنت هي شركة يمنية محدودة برأس مال معلن...
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                    <button class="card-toggle">
                        📍 الموقع
                    </button>
                    <div class="card-content">
                        تقع الخطوط الإنتاجية للشركة على بعد 60 كم شمال المكلا...
                    </div>
                </div>

                {{-- CARD 3 --}}
                <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                    <button class="card-toggle">
                        🧱 المنتجات
                    </button>
                    <div class="card-content">
                        إنتاج الإسمنت البورتلاندي العادي والمقاوم للكبريتات وفق المواصفات...
                    </div>
                </div>

                {{-- CARD 4 --}}
                <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                    <button class="card-toggle">
                        ⚙️ التكنولوجيا
                    </button>
                    <div class="card-content">
                        أحدث تقنيات ألمانية وأنظمة تحكم آلي وروبوتات في الإنتاج...
                    </div>
                </div>

                {{-- CARD 5 --}}
                <div class="info-card md:col-span-2" data-aos="fade-up" data-aos-delay="400">
                    <button class="card-toggle">
                        📊 الطاقة الإنتاجية
                    </button>
                    <div class="card-content text-center">
                        <span class="text-3xl font-extrabold text-emerald-500">1,500,000 طن سنوياً</span>
                    </div>
                </div>

                {{-- FULL DETAILS --}}
                <div class="info-card md:col-span-2" data-aos="fade-up" data-aos-delay="500">
                    <button class="card-toggle">
                        📖 عرض تفاصيل أكثر
                    </button>
                    <div class="card-content text-justify">
                        {!! $posts[0]->postDetailOne->content !!}
                    </div>
                </div>

            </div>

            <section class="max-w-6xl mx-auto mt-20 px-4 text-center" id="stats">

                <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-10">
                    الشركة العربية في أرقام
                </h3>

                <div
                    class="grid gap-8
                grid-cols-1
                sm:grid-cols-2
                lg:grid-cols-3">

                    <div class="stat-box">
                        <div class="stat-number" data-target="250">0</div>
                        <div class="stat-label">مليون دولار تكلفة المشروع</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number" data-target="142">0</div>
                        <div class="stat-label">مليون دولار رأس المال</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number" data-target="1500000">0</div>
                        <div class="stat-label">طن إنتاج سنوي</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number" data-target="60">0</div>
                        <div class="stat-label">كم عن مدينة المكلا</div>
                    </div>

                </div>
            </section>


        </section>
        <style>
            .info-card {
                /* background: linear-gradient(145deg, #1f2937, #111827); */
                background: linear-gradient(145deg, #006b36, #274f36);
                border-radius: 18px;
                border: 1px solid rgba(255, 255, 255, 0.06);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
                overflow: hidden;
            }

            .card-toggle {
                width: 100%;
                text-align: right;
                padding: 18px 22px;
                font-weight: bold;
                font-size: 18px;
                color: white;
                background: transparent;
                cursor: pointer;
                border: none;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .card-toggle::after {
                content: "＋";
                font-size: 22px;
                transition: transform .3s;
            }

            .info-card.active .card-toggle::after {
                content: "−";
            }

            .card-content {
                max-height: 0;
                overflow: hidden;
                padding: 0 22px;
                color: #d1d5db;
                line-height: 1.9;
                transition: all .4s ease;
            }

            .info-card.active .card-content {
                max-height: 1166px;
                padding: 0 22px 20px;
            }

            .stat-box {
                background: #ffffff;
                border-radius: 14px;
                padding: 30px 20px;
                border: 1px solid #e5e7eb;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
                transition: all .3s ease;

            }

            .stat-box:hover {
                transform: translateY(-6px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            }

            .stat-number {
                font-size: 40px;
                font-weight: 800;
                color: #006b36;
                /* أخضر الهوية */
            }

            .stat-label {
                margin-top: 10px;
                font-size: 15px;
                color: #111827;
                /* أسود أنيق */
                font-weight: 600;
            }
        </style>
        <script>
            document.querySelectorAll('.card-toggle').forEach(btn => {
                btn.addEventListener('click', () => {
                    const card = btn.parentElement;
                    card.classList.toggle('active');
                });
            });

            const counters = document.querySelectorAll('.stat-number');
            let started = false;

            function startCounting() {
                counters.forEach(counter => {
                    const target = +counter.dataset.target;
                    const duration = 2000;
                    const step = target / (duration / 16);

                    let count = 0;
                    const update = () => {
                        count += step;
                        if (count < target) {
                            counter.innerText = Math.floor(count).toLocaleString();
                            requestAnimationFrame(update);
                        } else {
                            counter.innerText = target.toLocaleString();
                        }
                    };
                    update();
                });
            }

            window.addEventListener('scroll', () => {
                const statsSection = document.getElementById('stats');
                const rect = statsSection.getBoundingClientRect();

                if (!started && rect.top < window.innerHeight - 100) {
                    started = true;
                    startCounting();
                }
            });
        </script>


        <x-divider>{{ __('adminlte::landingpage.values') }}</x-divider>
        <section class=" px-4 bg-base-100 justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:inline-grid lg:grid-cols-3 lg:justify-center gap-6">
                @foreach ($posts->skip(1) as $post)
                    <x-icon-card title="{{ $post->postDetailOne->title }}" icon="{{ $post->postDetailOne->color }}"
                        description="{{ $post->postDetailOne->content }}" />
                @endforeach
            </div>
        </section>
    </div>
@endsection
@section('jsafter')
    {{-- <livewire:carousel />  --}}
@endsection
