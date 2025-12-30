@extends('adminlte::page')

@php
    $route = 'contactus-page';
    $id = 'contactus_page';
    $pageName = 'menu.contactUs';
@endphp

@section('title', __("adminlte::$pageName") . ' - ' . __('adminlte::adminlte.editNews'))
@section('content_header')
    <div class="row">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a
                    href="{{ localizedRoute("$route.index") }}">{{ __("adminlte::$pageName") }}</a></li>
            <li class="breadcrumb-item active">{{ __('adminlte::adminlte.editNews') }}</li>
        </ol>
    </div>
@stop


@section('content')
    {{-- Placeholder, date only and append icon --}}
    @include('admin-panel.modals')

    @if (session('error'))
        <div class="container">
            <x-adminlte-card title="{{ __('adminlte::adminlte.error!') }}" theme="danger" theme-mode="outline"
                icon="fas fa-lg fa-exclamation-circle"
                body-class="{{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}"
                header-class="text-uppercase rounded-bottom border-info text-left" removable>
                <i>{{ session('error') }}</i>
            </x-adminlte-card>
        </div>
    @endif
    <form action="{{ localizedRoute("$route.update", ["$id" => $post->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <!-- title Column -->
                    <div class="col-12 col-md-6">
                        <div class="form-group" style="direction: rtl;" >
                            <x-adminlte.form.input id="title" name="title" value="{{ $post->postDetailOne->title }}"
                                label="{{ __('adminlte::adminlte.title(AR)') }}" label-class="text-olive" enable-old-support
                                required />
                        </div>


                        <!-- DateTime Picker -->
                        {{-- @php
                            $config = [
                                'format' => 'L',
                                'defaultDate' => Carbon\Carbon::now()->format('m/d/Y'), // Corrected format for default date
                            ];
                        @endphp
                        <x-adminlte-input-date name="date" :config="$config" value="{{ $post->date }}"
                            placeholder="{{ __('adminlte::landingpage.choosedate') }}" label-class="text-olive"
                            label="{{ __('adminlte::adminlte.date') }}" required enable-old-support>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-success">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date> --}}
                        <div class="form-group " style="direction: ltr;" >
                            <x-adminlte.form.input id="title_en" name="title_en" label-class="text-olive" value="{{ $post->postDetailOne->title_en }}"
                                label="{{ __('adminlte::adminlte.title(EN)') }}" enable-old-support />
                        </div>
                    </div>


                    <!-- Left Column -->
                    <div class="col-12 col-md-6">

                        <x-adminlte-select2 igroup-size="lg" name="icon" label="{{ __('adminlte::adminlte.icon') }}"
                                id="icon-select" label-class="text-olive" enable-old-support required>
                                @foreach ($icons as $icon)
                                    <option value="{{ $icon['value'] }}"
                                        {{ $post->postDetailOne->color == $icon['value'] ? 'selected' : '' }}
                                        data-icon="{{ e(svg($icon['value'], 'text-success', ['width' => '30', 'height' => '30'])) }}">
                                        {{ $icon['label'] }}
                                    </option>
                                @endforeach
                            </x-adminlte-select2>
                            @push('js')
                                <script>
                                    $(document).ready(function() {
                                        $('#icon-select').select2({
                                            templateResult: function(state) {
                                                if (!state.id) return state.text; // placeholder
                                                var icon = $(state.element).data('icon');
                                                return $('<span>' + icon + ' ' + state.text + '</span>');
                                            },
                                            templateSelection: function(state) {
                                                if (!state.id) return state.text;
                                                var icon = $(state.element).data('icon');
                                                return $('<span>' + icon + ' ' + state.text + '</span>');
                                            },
                                            escapeMarkup: function(markup) {
                                                return markup;
                                            }
                                        });
                                    });
                                </script>
                            @endpush
                        


                        {{-- <div class="form-group">
                            <x-adminlte-input name="slug" label="{{ __('adminlte::adminlte.slug(AR)') }}"
                            value="{{ $post->postDetailOne->slug }}"
                                placeholder="postal code" label-class="text-olive" enable-old-support>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-link"></i>
                                    </div>
                                </x-slot>
                                <x-slot name="bottomSlot">
                                    <a href="#" data-toggle="modal"
                                        data-target="#modalMin">{{ __('adminlte::adminlte.whatItMeans') }}</a>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        <div class="form-group">
                            <x-adminlte-input name="slug_en" label="{{ __('adminlte::adminlte.slug(EN)') }}"
                            value="{{ $post->postDetailOne->slug_en }}"
                                placeholder="postal code" label-class="text-olive" enable-old-support>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-link"></i>
                                    </div>
                                </x-slot>
                                <x-slot name="bottomSlot">
                                    <a href="#" data-toggle="modal"
                                        data-target="#modalMin">{{ __('adminlte::adminlte.whatItMeans') }}</a>
                                </x-slot>
                            </x-adminlte-input>
                        </div> --}}


                        {{-- 
                        <div class="form-group">
                            <x-adminlte-select2 name="category_id" :config="['minimumResultsForSearch' => 'Infinity']"
                                label="{{ __('adminlte::adminlte.postType') }}" label-class="text-olive">
                                @foreach ($categories as $category)
                                <option {{ $post->postDetailOne->category_id==$category->id?'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </x-adminlte-select2>
                        </div> --}}

                        {{-- <x-adminlte-modal tabindex="-1" id="modalMin" title="{{ __('adminlte::adminlte.slug') }}" theme="olive"
                            icon="fas fa-question" size='lg'>
                            <p class="bg-secondary text-white container p-3 my-3 border responsive-text"
                                style="direction: ltr; text-align: left;">
                                <span class="bg-dark text-white container m-2"> URL : </span>
                                <span class="responsive-text">
                                    https://www.ayccl.com/ar/News/{{ $post->id }}/{{ $post->postDetailOne->slug }}
                                </span>
                            </p>
                            <p class="responsive-text">
                                {{ __('adminlte::adminlte.slug') }}:
                                <span class="text-danger">{{ $post->postDetailOne->slug }}</span>
                            </p>
                            <p class="responsive-text">
                                {!! nl2br(__('adminlte::adminlte.slugInfo')) !!}
                            </p>
                        </x-adminlte-modal> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- Attachments images upload --}}
                    <div class="row">
                        {{-- content --}}
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <x-adminlte.form.input id="title" name="content_ar" value="{{ $post->postDetailOne->content }}"
                                label="{{ __('adminlte::adminlte.contentAR') }}" label-class="text-olive" enable-old-support
                                required />
                            </div>
                            </div>
                            <div class="col-12 col-md-6">
                        <div class="form-group"  style="direction: ltr;" >
                            <x-adminlte.form.input id="content_en" name="content_en" label-class="text-olive" value="{{ $post->postDetailOne->content_en }}"
                                label="{{ __('adminlte::adminlte.contentEN') }}" enable-old-support />
                        </div>
                        </div>
                    </div>
                    <div class="text-center">

                    <button class="btn btn-success p-2 col-12 col-md-6 " type="submit">
                        {{ __('adminlte::adminlte.save') }}
                    </button>
                </div>
            </div>
        </div>
    </form>

@stop

@section('plugins.toastr', true)
@section('plugins.KrajeeFileinput', true)
@section('plugins.Summernote', true)
@section('plugins.TempusDominusBs4', true)
@section('plugins.Select2', true)

@section('adminlte_js')
@stop
