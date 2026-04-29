@extends('adminlte::page')
@section('title', __('adminlte::landingpage.aboutcompany') . ' - ' . __('adminlte::adminlte.sections'))

@section('content_header')
    <h1>{{ __('adminlte::landingpage.aboutcompany') }} - {{ __('adminlte::adminlte.sections') }}</h1>
@stop

@section('content')
    @include('admin-panel.modals')

    <div class="container mx-0 mb-5">
        <a href="{{ route('about-company-sections.create', ['locale'=> app()->getLocale()]) }}">
            <x-adminlte-button class="btn-lg mb-10" type="reset" label="{{ __('adminlte::adminlte.createNewPost') }}"
                theme="outline-success" icon="fas fa-file-far fa-plus-square" />
        </a>
    </div>

    @php
        $heads = [
            ['label' => 'ID', 'width' => 5, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.icon'), 'width' => 10, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.title'), 'width' => 20, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.content'), 'width' => 45, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.procedures'), 'no-export' => true, 'width' => 20, 'classes' => 'border border-white bg-olive'],
        ];

        $data = [];
        foreach ($sections as $section) {
            $btnEdit = '<a href="' . route('about-company-sections.edit', ['locale' => app()->getLocale(), 'about_company_section' => $section->id]) . '" class="btn btn-warning mx-1" title="'.__('adminlte::adminlte.edit').'"><i class="fas fa-edit"></i></a>';
            
            $btnDelete = '<button class="btn btn-danger mx-1" data-toggle="modal" data-target="#modalCustom" data-id="' . $section->id . '" title="'.__('adminlte::adminlte.delete').'"><i class="fas fa-trash"></i></button>';

            $btnActivation = '<button class="btn btn-success mx-1" data-toggle="modal" data-target="#modalActivate" data-id="' . $section->id . '" title="'.__('adminlte::adminlte.activate').'"><i class="fas fa-eye"></i></button>';

            $data[] = [
                $section->id,
                '<span style="font-size: 24px;">' . $section->icon . '</span>',
                $section->title,
                \Illuminate\Support\Str::limit(strip_tags($section->content), 100),
                $btnEdit . ($section->active ? $btnDelete : $btnActivation . $btnDelete),
            ];
        }

        $config = [
            'data' => $data,
            'order' => [[0, 'asc']],
            'columns' => [null, null, null, null, ['orderable' => false]],
            'escape' => false,
            'dom' => 'fBrtp',
            'language' => [
                'search' => __('adminlte::adminlte.search'),
            ],
        ];
    @endphp

    <x-adminlte-datatable id="table_sections" :heads="$heads" :config="$config" striped hoverable with-buttons />

    {{-- Modals --}}
    <x-adminlte-modal tabindex="-1" id="modalCustom" title="{{ __('adminlte::adminlte.caution!') }}" theme="danger"
        icon="fas fa-exclamation-triangle" v-centered>
        <div>{{ __('adminlte::adminlte.deleteCaution') }}</div>
        <div style="font-size: 14px;"><br>{{ __('adminlte::adminlte.deactivateCaution') }}</div>
        <x-slot name="footerSlot">
            <form id="formDelete" action="" method="POST">
                @csrf
                @method('DELETE')
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-danger"
                    label="{{ __('adminlte::adminlte.delete') }}" />
            </form>
            {{-- Form for DEACTIVATE Action --}}
            <form id="formDeactivate" action="" method="POST" style="display:inline;">
                @csrf
                @method('PUT')
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-success"
                    label="{{ __('adminlte::adminlte.deActivate') }}" />
            </form>
            <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>

    <x-adminlte-modal tabindex="-1" id="modalActivate" title="{{ __('adminlte::adminlte.activate') }}" theme="success"
        icon="fas fa-question" v-centered>
        <div>{{ __('adminlte::adminlte.activeCaution') }}</div>
        <x-slot name="footerSlot">
            <form id="formActivate" action="" method="POST">
                @csrf
                @method('PUT')
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-success"
                    label="{{ __('adminlte::adminlte.activate') }}" />
            </form>
            <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
@stop

@section('plugins.toastr', true)
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('adminlte_js')
    <script>
        $(document).ready(function() {
            $('#modalCustom').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                
                var deleteAction = '{{ route("about-company-sections.destroy", ["locale" => app()->getLocale(), "about_company_section" => "__ID__"]) }}';
                deleteAction = deleteAction.replace('__ID__', id);
                $('#formDelete').attr('action', deleteAction);

                // For activation toggle if you use a separate route or update
                var activationAction = '{{ route("about-company-sections-activation", ["id" => "__ID__"]) }}';
                activationAction = activationAction.replace('__ID__', id);
                $('#formDeactivate').attr('action', activationAction);
            });

            $('#modalActivate').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var action = '{{ route("about-company-sections-activation", ["id" => "__ID__"]) }}';
                action = action.replace('__ID__', id);
                $('#formActivate').attr('action', action);
            });
        });
    </script>
@stop
