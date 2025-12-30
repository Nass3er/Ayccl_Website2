<div class="drawer top-0 z-[999] lg:hidden">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />

    <!-- Drawer Trigger -->
    <div class="drawer-content">
        <label for="my-drawer" class="btn bg-green-800/75 border-0 text-white drawer-button">☰</label>
    </div>

    <!-- Drawer Side -->
    <div class="drawer-side font-bold">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>

        <div class="flex flex-col justify-between w-3/4 sm:w-1/2 bg-base-200 h-screen overflow-y-auto">
            <!-- Close Button -->
            <label for="my-drawer"
                class="absolute btn bg-red-800/75 text-white  top-7 start-2 text-xl border-0 drawer-button">✕</label>
            {{-- <label for="my-drawer"
                class="absolute top-7 start-4 text-xl cursor-pointer text-red-600 hover:text-red-800">
                ✕
            </label> --}}
            <label for="my-drawer" class="absolute top-7 end-5 text-sm text-black cursor-pointer space-x-0.5 ">
                @php
                    $lang = session()->get('locale') ?? app()->getLocale();
                @endphp
                @if ($lang == 'ar')
                    <a class="nav-parent" href="{{ localizedRoute('lang.switch', ['lang' => 'en']) }}">
                        <i class="flag-icon flag-icon-us me-1"></i>
                        En
                    </a>
                @else
                    <a class="nav-parent" href="{{ localizedRoute('lang.switch', ['lang' => 'ar']) }}"> <i
                            class="flag-icon flag-icon-eg me-1"></i>عربي</a>
                @endif
            </label>

            <!-- Menu -->
            <ul class="menu text-base-content w-full flex-grow mt-18">
                {{-- <li class="mx-auto">
                    <a href="/">
                        <img src="{{ asset('/images/settings/logo.png') }}" alt="Logo">
                    </a>
                </li> --}}

                <li>
                    <a href="/">{{ __('adminlte::landingpage.home') }}</a>
                </li>

                <li>
                    <details class="details-group group/drawer">
                        <summary>{{ __('adminlte::landingpage.aboutus') }}</summary>
                        <ul class="border-s-4 border-s-emerald-800">
                            <li><a
                                    href="{{ localizedRoute('aboutus') }}">{{ __('adminlte::landingpage.aboutcompany') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('management') }}">{{ __('adminlte::landingpage.management') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('visionIndex') }}">{{ __('adminlte::landingpage.ourvision') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('futureplans') }}">{{ __('adminlte::landingpage.futurePlans') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('socialresponsibility') }}">{{ __('adminlte::landingpage.socialResponsibility') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('certificates') }}">{{ __('adminlte::landingpage.prizesAndCertificates') }}</a>
                            </li>
                        </ul>
                    </details>
                </li>

                <li>
                    <details class="details-group group/drawer">
                        <summary>{{ __('adminlte::landingpage.salesAndMarketing') }}</summary>
                        <ul class="border-s-4 border-s-emerald-800">
                            <li><a
                                    href="{{ localizedRoute('hadrami') }}">{{ __('adminlte::landingpage.100hadrami') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('products') }}">{{ __('adminlte::landingpage.products') }}</a>
                            </li>
                            <li><a
                                    href="{{ localizedRoute('customerservice') }}">{{ __('adminlte::landingpage.customerservice') }}</a>
                            </li>
                            {{-- <li><a
                                    href="{{ localizedRoute('suggestionsandcomplaints') }}">{{ __('adminlte::landingpage.suggestionsAndComplaints') }}</a>
                            </li> --}}
                        </ul>
                    </details>
                </li>

                <li>
                    <details class="details-group group/drawer">
                        <summary>{{ __('adminlte::landingpage.humanResources') }}</summary>
                        <ul class="border-s-4 border-s-emerald-800">
                            <li> <a href={{ localizedRoute('employeesAdvantages') }}
                                    >{{ __('adminlte::landingpage.employeesAdvantages') }}</a> </li>
                            <li> <a href={{ localizedRoute('jobApplication') }}
                                    >{{ __('adminlte::landingpage.jobApplication') }}</a>
                            </li>
                            <li> <a href={{ localizedRoute('askForVisit') }}
                                    >{{ __('adminlte::landingpage.askForVisit') }}</a> </li>
                            <li> <a href={{ localizedRoute('askForTraining') }}
                                    >{{ __('adminlte::landingpage.askForTraining') }}</a>
                            </li>
                        </ul>
                    </details>
                </li>

                <li>
                    <details class="details-group group/drawer">
                        <summary>{{ __('adminlte::landingpage.mediaCenter') }}</summary>
                        <ul class="border-s-4 border-s-emerald-800">
                            <li> <a href={{ localizedRoute('newsAndActivities') }}
                                    >{{ __('adminlte::landingpage.newsAndActivities') }}</a> </li>
                            <li> <a href={{ localizedRoute('photosGalary') }}
                                    >{{ __('adminlte::landingpage.photosGalary') }}</a> </li>
                            <li> <a href={{ localizedRoute('videos') }}
                                    >{{ __('adminlte::landingpage.videos') }}</a> </li>
                            <li> <a href={{ localizedRoute('documents') }}
                                    >{{ __('adminlte::landingpage.documents') }}</a> </li>
                        </ul>
                    </details>
                </li>
                {{-- <li>
                    <a
                        href={{ localizedRoute('sustainableDevelopment') }}>{{ __('adminlte::landingpage.sustainableDevelopment') }}</a>
                </li> --}}
                <li>
                    <a href={{ localizedRoute('contactus') }}>{{ __('adminlte::landingpage.contactus') }}</a>
                </li>
            </ul>

            <!-- Bottom Icons -->
            <div class="flex justify-center items-center gap-4 p-4 w-full">
                
                @foreach ($systems as $system)
                <a href="{{ $system->postDetailOne->content }}" target="_blank">
                    <img src="{{ asset($system->mediaOne->thumbnailpath) }}"
                    class="size-10 object-contain rounded-xl shadow-md" />
                    <div><p class="text-sm text-black">{{ $system->postDetailOne->title}}</p></div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
