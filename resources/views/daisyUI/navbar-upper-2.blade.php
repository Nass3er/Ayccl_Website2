{{-- <div class="navbar fixed top-0 z-[997] w-1/2 mx-auto bg-base-100 rounded-2xl " > --}}
<div id="navbar" class="navbar fixed top-0 z-[997] text-white 
    {{-- border-b-5 border-emerald-900 --}}
{{-- rounded-2xl border-b-4 border-green-900 --}}
 ">

    <div class="navbar-start">
        @include('daisyUI.navbar-mobile')
        <div class="hidden lg:flex">
            <a href="/">
                <img src={{ asset('images/logo.png') }} alt="Logo" class="h-[100%] w-[100%] ">
            </a>
        </div>
    </div>



    <div class="navbar-center flex lg:hidden ">
        <div class="">
            <a href="/">
                <img src={{ asset('images/logo.png') }} alt="Logo" class="h-[100%] w-[100%] ">
            </a>
        </div>
    </div>
    <div class="navbar-center hidden lg:flex mb-0 ">
        {{-- <ul class="menu menu-horizontal px-1"> --}}
        <ul
            class="menu menu-horizontal dropdown-content z-1
            {{-- border-b-4 border-green-900 rounded-2xl rounded-box --}}
            justify-center-safe items-center-safe 
            ">
            {{-- <li><a class="nav-parent" href='/'>{{ __('adminlte::landingpage.home') }}</a></li> --}}



            {{-- about us --}}
            <li class="relative group/main font-bold ">
                <div class="nav-parent">
                    {{ __('adminlte::landingpage.aboutus') }}
                    <svg class="ml-2 w-4 h-4 transform group-hover/main:rotate-180 transition-transform duration-200"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.194l3.71-3.965a.75.75 0 111.08 1.04l-4.25 4.54a.75.75 0 01-1.08 0l-4.25-4.54a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <ul class="navmenu">
                    <li><a class="nav-child"
                            href={{ localizedRoute(name: 'aboutus') }}>{{ __('adminlte::landingpage.aboutcompany') }}</a>
                    </li>
                    <li><a class="nav-child"
                            href={{ localizedRoute('management') }}>{{ __('adminlte::landingpage.management') }}</a>
                    </li>
                    <li><a class="nav-child"
                            href={{ localizedRoute('visionIndex') }}>{{ __('adminlte::landingpage.ourvision') }}</a>
                    </li>
                    <li><a class="nav-child"
                            href={{ localizedRoute('futureplans') }}>{{ __('adminlte::landingpage.futurePlans') }}</a>
                    </li>
                    <li><a class="nav-child"
                            href={{ localizedRoute('socialresponsibility') }}>{{ __('adminlte::landingpage.socialResponsibility') }}</a>
                    </li>
                    <li><a class="nav-child"
                            href={{ localizedRoute('certificates') }}>{{ __('adminlte::landingpage.prizesAndCertificates') }}</a>
                    </li>
                </ul>
            </li>

            {{-- sales and marketing --}}
            <li class="relative group/main font-bold ">
                <div class="nav-parent">
                    {{ __('adminlte::landingpage.salesAndMarketing') }}
                    <svg class="w-4 h-4 transform group-hover/main:rotate-180 transition-transform duration-200"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.194l3.71-3.965a.75.75 0 111.08 1.04l-4.25 4.54a.75.75 0 01-1.08 0l-4.25-4.54a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <ul class="navmenu">
                    <li> <a href={{ localizedRoute('hadrami') }}
                            class="nav-child">{{ __('adminlte::landingpage.100hadrami') }}</a> </li>
                    <li> <a href={{ localizedRoute('products') }}
                            class="nav-child">{{ __('adminlte::landingpage.products') }}</a> </li>
                    <li> <a href={{ localizedRoute('customerservice') }}
                            class="nav-child">{{ __('adminlte::landingpage.customerservice') }}</a></li>
                    {{-- <li><a href={{ localizedRoute('suggestionsandcomplaints') }}
                            class="nav-child">{{ __('adminlte::landingpage.suggestionsAndComplaints') }}</a></li> --}}
                            
                    {{-- sub sub menu --}}
                    {{-- <li class="relative group/submain">
                        <!-- Dropdown submain menu  -->
                        <div class="nav-subparent ">
                            {{ __('adminlte::landingpage.branches') }}
                            <svg class="ml-2 w-4 h-4 transform group-hover/submain:rtl:rotate-90 group-hover/submain:ltr:-rotate-90 transition-transform duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.194l3.71-3.965a.75.75 0 111.08 1.04l-4.25 4.54a.75.75 0 01-1.08 0l-4.25-4.54a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <!-- Sub submain menu -->
                        <ul class="navsubmenu">
                            <li><a href="/branches/north" class="nav-child">فرع 1</a></li>
                            <li><a href="/branches/south" class="nav-child">فرع 2</a></li>
                            <li><a href="/branches/east" class="nav-child">فرع 3</a></li>
                            <li><a href="/branches/west" class="nav-child">فرع 4</a></li>
                        </ul>
                    </li> --}}

                </ul>
            </li>



            {{-- human resources --}}
            <li class="relative group/main font-bold ">
                <div class="nav-parent">
                    {{ __('adminlte::landingpage.humanResources') }}
                    <svg class="w-4 h-4 transform group-hover/main:rotate-180 transition-transform duration-200"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.194l3.71-3.965a.75.75 0 111.08 1.04l-4.25 4.54a.75.75 0 01-1.08 0l-4.25-4.54a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <ul class="navmenu">
                    <li> <a href={{ localizedRoute('employeesAdvantages') }}
                            class="nav-child">{{ __('adminlte::landingpage.employeesAdvantages') }}</a> </li>
                    <li> <a href={{ localizedRoute('jobApplication') }}
                            class="nav-child">{{ __('adminlte::landingpage.jobApplication') }}</a>
                    </li>
                    <li> <a href={{ localizedRoute('askForVisit') }}
                            class="nav-child">{{ __('adminlte::landingpage.askForVisit') }}</a> </li>
                    <li> <a href={{ localizedRoute('askForTraining') }}
                            class="nav-child">{{ __('adminlte::landingpage.askForTraining') }}</a>
                    </li>
                </ul>
            </li>




            {{-- Media Center --}}
            <li class="relative group/main font-bold ">
                <div class="nav-parent">
                    {{ __('adminlte::landingpage.mediaCenter') }}
                    <svg class="w-4 h-4 transform group-hover/main:rotate-180 transition-transform duration-200"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.194l3.71-3.965a.75.75 0 111.08 1.04l-4.25 4.54a.75.75 0 01-1.08 0l-4.25-4.54a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <ul class="navmenu">
                    <li> <a href={{ localizedRoute('newsAndActivities') }}
                            class="nav-child">{{ __('adminlte::landingpage.newsAndActivities') }}</a> </li>
                    {{-- <li> <a href="/products" class="nav-child">{{ __('adminlte::landingpage.activities') }}</a> </li> --}}
                    <li> <a href={{ localizedRoute('photosGalary') }}
                            class="nav-child">{{ __('adminlte::landingpage.photosGalary') }}</a> </li>
                    <li> <a href={{ localizedRoute('videos') }}
                            class="nav-child">{{ __('adminlte::landingpage.videos') }}</a> </li>
                    <li> <a href={{ localizedRoute('documents') }}
                            class="nav-child">{{ __('adminlte::landingpage.documents') }}</a> </li>
                </ul>
            </li>
            {{-- contact us --}}
            {{-- <li>
                <a class="nav-parent"
                    href={{ localizedRoute('sustainableDevelopment') }}>{{ __('adminlte::landingpage.sustainableDevelopment') }}</a>
            </li> --}}
            <li><a class="nav-parent"
                    href={{ localizedRoute('contactus') }}>{{ __('adminlte::landingpage.contactus') }}</a></li>
        </ul>
    </div>

    <div class="navbar-end top-0 z-[998] relative flex flex-row justify-between ">
        <!-- Language Switcher -->
        <ul class="menu z-1 hidden lg:flex items-center space-x-4 justify-end py-0 order-2">
            @php
                $lang = session()->get('locale') ?? app()->getLocale();
            @endphp
            @if ($lang == 'ar')
                <li>
                    <a class="nav-parent py-0" href="{{ localizedRoute('lang.switch', ['lang' => 'en']) }}">
                        <i class="flag-icon flag-icon-us"></i> En
                    </a>
                </li>
            @else
                <li>
                    <a class="nav-parent" href="{{ localizedRoute('lang.switch', ['lang' => 'ar']) }}">
                        <i class="flag-icon flag-icon-eg"></i> عربي
                    </a>
                </li>
            @endif
        </ul>
        <div class="hidden lg:flex w-fit space-x-3 lg:ms-[10%] xl:ms-[25%]">
            @foreach ($systems as $system)
                <div class="tooltip tooltip-bottom" data-tip="{{ $system->postDetailOne->title }}">
                    <a href="{{ $system->postDetailOne->content }}" target="_blank" class="transition-transform hover:scale-110">
                        <img src="{{ asset($system->mediaOne->thumbnailpath) }}"
                            class="size-10 object-contain " />
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>
