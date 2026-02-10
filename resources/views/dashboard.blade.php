{{-- @extends('adminlte::page', ['iFrameEnabled' => true]) --}}

@extends('adminlte::page')

@section('title', __('adminlte::adminlte.dashboard'))

@section('content_header')
    <h1><i class="fas fa-tachometer-alt mr-2"></i>{{ __('adminlte::adminlte.dashboard') }}</h1>
@stop

@section('content')
    <!-- Statistics Cards -->
    <div class="row mt-3">
        <!-- Total Users Card -->
        <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['total_users'] }}"
                text="{{ __('adminlte::adminlte.totalUsers') }}"
                icon="fas fa-users"
                theme="gradient-teal"
                icon-theme="white"/>
        </div>

        <!-- Active Users Card -->
        {{-- <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['active_users'] }}"
                text="{{ __('adminlte::adminlte.activeUsers') }}"
                icon="fas fa-user-check"
                theme="gradient-success"
                icon-theme="white"/>
        </div> --}}

        <!-- Total Posts Card -->
        <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['total_posts'] }}"     
                text="{{ __('adminlte::adminlte.totalPosts') }}"
                icon="fas fa-newspaper"
                theme="gradient-primary"
                icon-theme="white"/>
        </div>

        <!-- Active Posts Card -->
        {{-- <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['active_posts'] }}"
                text="{{ __('adminlte::adminlte.activePosts') }}"
                icon="fas fa-check-circle"
                theme="gradient-info"
                icon-theme="white"/>
        </div> --}}

        <!-- Total Media Card -->
        <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['total_media'] }}"
                text="{{ __('adminlte::adminlte.totalMedia') }}"
                icon="fas fa-images"
                theme="gradient-warning"
                icon-theme="white"/>
        </div>

        <!-- Total Pages Card -->
        {{-- <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['total_pages'] }}"
                text="{{ __('adminlte::adminlte.totalPages') }}"
                icon="fas fa-file-alt"
                theme="gradient-purple"
                icon-theme="white"/>
        </div> --}}

        {{-- <!-- Total Categories Card -->
        <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ $stats['total_categories'] }}"
                text="{{ __('adminlte::adminlte.totalCategories') }}"
                icon="fas fa-tags"
                theme="gradient-pink"
                icon-theme="white"/>
        </div> --}}

        <!-- Total Media Files -->
        <div class="col-lg-3 col-6">
            <x-adminlte-info-box
                title="{{ array_sum($mediaCenter) }}"
                text="{{ __('adminlte::adminlte.mediaCenter') }}"
                icon="fas fa-broadcast-tower"
                theme="gradient-danger"
                icon-theme="white"/>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Media Center - Quick Links -->
        <div class="col-lg-12">
            <x-adminlte-card theme="dark" title="{{ __('adminlte::adminlte.mediaCenter') }}" icon="fas fa-broadcast-tower" collapsible removable>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="{{ localizedRoute('news.index') }}" class="text-decoration-none">
                            <div class="card bg-gradient-info text-white hover-shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1">{{ $mediaCenter['news'] }}</h3>
                                            <p class="mb-0"><i class="fas fa-newspaper mr-2"></i>{{ __('adminlte::menu.newsAndActivities') }}</p>
                                        </div>
                                        <i class="fas fa-newspaper fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 mb-3">
                        <a href="{{ localizedRoute('photos.index') }}" class="text-decoration-none">
                            <div class="card bg-gradient-success text-white hover-shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1">{{ $mediaCenter['photos'] }}</h3>
                                            <p class="mb-0"><i class="fas fa-images mr-2"></i>{{ __('adminlte::menu.photosGalary') }}</p>
                                        </div>
                                        <i class="fas fa-images fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 mb-3">
                        <a href="{{ localizedRoute('videos.index') }}" class="text-decoration-none">
                            <div class="card bg-gradient-danger text-white hover-shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1">{{ $mediaCenter['videos'] }}</h3>
                                            <p class="mb-0"><i class="fas fa-video mr-2"></i>{{ __('adminlte::menu.videos') }}</p>
                                        </div>
                                        <i class="fas fa-video fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 mb-3">
                        <a href="{{ localizedRoute('documents.index') }}" class="text-decoration-none">
                            <div class="card bg-gradient-warning text-white hover-shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="mb-1">{{ $mediaCenter['documents'] }}</h3>
                                            <p class="mb-0"><i class="fas fa-file-alt mr-2"></i>{{ __('adminlte::menu.documents') }}</p>
                                        </div>
                                        <i class="fas fa-file-alt fa-3x opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </x-adminlte-card>
        </div>

        <!-- Quick Actions -->
        {{-- <div class="col-lg-6">
            <x-adminlte-card theme="dark" title="{{ __('adminlte::adminlte.quickActions') }}" icon="fas fa-bolt" collapsible removable>
                <div class="row">
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('home-page.index') }}" class="btn btn-primary btn-block btn-lg">
                            <i class="fas fa-home mr-2"></i>{{ __('adminlte::menu.home') }}
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('about-company.index') }}" class="btn btn-info btn-block btn-lg">
                            <i class="fas fa-building mr-2"></i>{{ __('adminlte::menu.aboutUs') }}
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('products.index') }}" class="btn btn-success btn-block btn-lg">
                            <i class="fas fa-box mr-2"></i>{{ __('adminlte::menu.products') }}
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('contactus-page.index') }}" class="btn btn-warning btn-block btn-lg">
                            <i class="fas fa-envelope mr-2"></i>{{ __('adminlte::menu.contactUs') }}
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('users-management.index') }}" class="btn btn-danger btn-block btn-lg">
                            <i class="fas fa-users-cog mr-2"></i>{{ __('adminlte::menu.users_management') }}
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ localizedRoute('categories.index') }}" class="btn btn-secondary btn-block btn-lg">
                            <i class="fas fa-tags mr-2"></i>{{ __('adminlte::menu.categories') }}
                        </a>
                    </div>
                </div>
            </x-adminlte-card>
        </div> --}}
    </div>

    <!-- Recent Posts -->
    @if($recentPosts->count() > 0)
    <div class="row mt-3">
        <div class="col-12">
            <x-adminlte-card theme="dark" title="{{ __('adminlte::adminlte.recentMediaCenterPosts') }}" icon="fas fa-clock" collapsible removable>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('adminlte::adminlte.title') }}</th>
                                <th>{{ __('adminlte::adminlte.page') }}</th>
                                <th>{{ __('adminlte::adminlte.status') }}</th>
                                <th>{{ __('adminlte::adminlte.updatedAt') }}</th>
                                {{-- <th>{{ __('adminlte::adminlte.procedures') }}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentPosts as $post)
                            <tr>
                                <td>{{ $post->postDetailOne->title ?? 'N/A' }}</td>
                                <td>
                                    @if($post->page)
                                        <span class="badge badge-info">{{ $post->page->title }}</span>
                                    @else
                                        <span class="badge badge-secondary">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    @if($post->active)
                                        <span class="badge badge-success">{{ __('adminlte::adminlte.active') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('adminlte::adminlte.unActive') }}</span>
                                    @endif
                                </td>
                                <td>{{ $post->updated_at->format('Y-m-d H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-adminlte-card>
        </div>
    </div>
    @endif
@stop

@section('css')
<style>
    .hover-shadow {
        transition: all 0.3s ease;
    }

    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .card-body h3 {
        font-size: 2rem;
        font-weight: bold;
    }

    .opacity-50 {
        opacity: 0.5;
    }
</style>
@stop

@section('js')
@stop
