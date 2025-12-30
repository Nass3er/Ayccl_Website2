<footer class="footer sm:footer-horizontal bg-base-300 text-base-content p-10 mt-10  transition duration-300">
    <aside>
        <a href="{{ url('/') }}">
            <img src="{{ asset('/images/footer/Footer_Logo.png') }}" alt="logo" class="mb-4 w-32 " />
        </a>

        <div class=" rounded-md">
            <p class="font-extrabold">{{ __('adminlte::landingpage.ayccl') }}</p>
        </div>

        <p class="text-emerald-800 font-extrabold">
            {{ __('adminlte::landingpage.leadingcompany') }}
        </p>
    </aside>

    <nav>
        <h1 class="footer-title text-emerald-900">{{ __('adminlte::landingpage.aboutus') }}</h1>
        <a class="link link-hover hover:link-primary"
            href={{ localizedRoute(name: 'aboutus') }}>{{ __('adminlte::landingpage.aboutcompany') }}</a>
        <a class="link link-hover hover:link-primary"
            href={{ localizedRoute('management') }}>{{ __('adminlte::landingpage.management') }}</a>

        <a class="link link-hover hover:link-primary"
            href={{ localizedRoute('visionIndex') }}>{{ __('adminlte::landingpage.ourvision') }}</a>

        <a class="link link-hover hover:link-primary"
            href={{ localizedRoute('futureplans') }}>{{ __('adminlte::landingpage.futurePlans') }}</a>

        <a class="link link-hover hover:link-primary"
            href={{ localizedRoute('socialresponsibility') }}>{{ __('adminlte::landingpage.socialResponsibility') }}</a>

    </nav>
    <nav>
        <h1 class="footer-title text-emerald-900">{{ __('adminlte::landingpage.salesAndMarketing') }}</h1>
        <a href={{ localizedRoute('hadrami') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.100hadrami') }}</a>
        <a href={{ localizedRoute('products') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.products') }}</a>
        <a href={{ localizedRoute('customerservice') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.customerservice') }}</a>
        {{-- <a href={{ localizedRoute('suggestionsandcomplaints') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.suggestionsAndComplaints') }}</a> --}}
    </nav>
    <nav>
        <h1 class="footer-title text-emerald-900">{{ __('adminlte::landingpage.mediaCenter') }}</h1>
        <a href={{ localizedRoute('newsAndActivities') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.newsAndActivities') }}</a>
        {{--  <a href="/products" class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.activities') }}</a>  --}}
        <a href={{ localizedRoute('photosGalary') }}
            class="nav-child">{{ __('adminlte::landingpage.photosGalary') }}</a>
        <a href={{ localizedRoute('videos') }} class="nav-child">{{ __('adminlte::landingpage.videos') }}</a>
        <a href={{ localizedRoute('documents') }}
            class="link link-hover hover:link-primary">{{ __('adminlte::landingpage.documents') }}</a>

        {{-- <a href={{ localizedRoute('sustainableDevelopment') }}
            class="link link-hover text-emerald-900 hover:link-primary mt-5">{{ __('adminlte::landingpage.sustainableDevelopment') }}</a> --}}
    </nav>
    <nav>
        <a href={{ localizedRoute('contactus') }}
            class="footer-title link link-hover text-emerald-900 hover:link-primary mt-5">{{ __('adminlte::landingpage.contactus') }}</a>
            <div>
                    <span>{{ $address->postDetailOne->title }}</span>
                    <span>{{ $address->postDetailOne->content }}</span>
                </div>
        <div class="grid gap-2 sm:gap-4 grid-cols-5 sm:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6">
            @foreach ($socialLinks as $socialLink)
                <x-click-icon :icon="$socialLink->mediaOne->thumbnailpath" :url="$socialLink->mediaOne->link" :label="$socialLink->mediaOne->alt" :class="$socialLink->postDetailOne->color" />
            @endforeach

        </div>
    </nav>
</footer>

<footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4">
    <aside>
        <p>{{ __('adminlte::landingpage.copyrights') }}</p>
    </aside>
</footer>
