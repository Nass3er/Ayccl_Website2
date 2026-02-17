@extends('adminlte::page')
@section('title', __('adminlte::menu.settings'))

@section('content_header')
    <div class="row">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item active">{{ __('adminlte::menu.settings') }}</li>
        </ol>
    </div>
@stop

@section('content')
    @include('admin-panel.modals')


    @php
        $heads = [
            ['label' => 'ID', 'width' => 10, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.email'), 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.name'), 'classes' => 'border border-white bg-olive'],
            [
                'label' => __('adminlte::adminlte.procedures'),
                'classes' => 'border border-white bg-olive',
                'no-export' => true,
                'width' => 10,
            ],
        ];

        $btnEdit =
            '<a href="' .
            route('admin.settings.mail.edit', ['id' => $data['id'], 'locale' => app()->getLocale()]) .
            '" class="btn btn-warning" data-toggle="tooltip" title="' .
            __('adminlte::adminlte.edit') .
            '"><i class="fas fa-edit"></i></a>';

        $tableData = [
            [
                $data['id'],
                $data['email'],
                $data['from_name'],
                $btnEdit,
            ],
        ];

        $config = [
            'data' => $tableData,
            'order' => [[0, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
            'escape' => false,
            'scrollX' => true,
            'dom' => 'tr', // Minimal dom for a single row
            'language' => [
                'search' => __('adminlte::adminlte.search'),
            ],
        ];
    @endphp

    <x-adminlte-datatable id="table_settings" :heads="$heads" head-theme="dark" :config="$config" striped hoverable />

@stop

@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)
