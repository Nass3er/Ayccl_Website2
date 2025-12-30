@extends('adminlte::page')
@section('title', __('adminlte::menu.categories'))

@section('content_header')
    <h1>{{ __('adminlte::menu.categories') }}</h1>
@stop

@php
    $route = 'categories';
    $id = 'category';
@endphp


@section('content')
    @include('admin-panel.modals')

    <div class="row">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a
                    href="{{ localizedRoute("videos.index") }}">{{ __('adminlte::menu.videos') }}</a></li>
            <li class="breadcrumb-item active">{{ __('adminlte::menu.categories') }}</li>
        </ol>
    </div>

    <form action="{{ localizedRoute("$route.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <!-- Arabic Title -->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <x-adminlte.form.input 
                                id="title"
                                name="title"
                                label="{{ __('adminlte::adminlte.title(AR)') }}"
                                label-class="text-olive"
                                enable-old-support
                                required
                            />
                        </div>
                    </div>
    
                    <!-- English Title -->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <x-adminlte.form.input 
                                id="title_en"
                                name="title_en"
                                label="{{ __('adminlte::adminlte.title(EN)') }}"
                                label-class="text-olive"
                                enable-old-support
                            />
                        </div>
                    </div>
                </div>
    
                <!-- Centered Save Button -->
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success col-12 col-md-6 p-2">
                            {{ __('adminlte::adminlte.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    

@section('plugins.toastr', true)

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

    @php
        $heads = [
            ['label' => 'ID', 'width' => 3, 'classes' => 'border border-white bg-olive'],
            ['label' => __('adminlte::adminlte.title'), 'classes' => 'border border-white bg-olive'],
            [
                'label' => __('adminlte::adminlte.procedures'),
                'classes' => 'border border-white bg-olive',
                'no-export' => true,
                'width' => 13,
            ],
        ];
        // dd($posts);
        $data = [];
        $counter = 1;
        foreach ($categories as $category) {

            $btnEdit = '
                <button type="button" class="btn btn-warning btnEditCategory"
                    data-id="' . $category->id . '"
                    data-title="' . e($category->name) . '"
                    data-title_en="' . e($category->name_en) . '"
                    data-toggle="modal"
                    data-target="#categoryEdit"
                    title="' . __('adminlte::adminlte.edit') . '">
                    <i class="fas fa-edit"></i>
                </button>';
            $btnDelete =
                '<span style="display: inline-block; " data-toggle="tooltip" data-placement="left" title="' .
                __('adminlte::adminlte.delete') .
                ' "><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalCustom"  data-id="' .
                $category->id .
                '"' .
                // __('adminlte::adminlte.delete') .
                '"><i class="fas fa-trash" ></i>' .
                '</button></span>';

            $data[] = [
                $counter++ ?? 'N/A',
                // $post->id,
                \Illuminate\Support\Str::limit(strip_tags($category->name), limit: 75),
                // $category->name ?? 'N/A',
                $btnEdit .' ' . $btnDelete,
            ];
        }
        $config = [
            'data' => $data,
            // 'order' => [[0, 'asc']],
            'columns' => [null, null, ['orderable' => false]],
            'escape' => false,
            // 'responsive' => false,
            'scrollX' => true,
            'dom' => 'fBrtp',
            'paging' => true, // Ensure paging is explicitly enabled
            'pagingType' => 'full_numbers',
            // 'serverSide' => true,
            // 'processing' => true,
            // 'ajax' => "{{ localizedRoute('videos.index') }}",
            'language' => [
                'search' => __('adminlte::adminlte.search'),
                'paginate' => [
                    'next' => '&raquo;',
                    'previous' => '&laquo;',
                    'last' => '&raquo;&raquo;',
                    'first' => '&laquo;&laquo;',
                ],
            ],
        ];
    @endphp

    {{-- AdminLTE DataTable --}}
    <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" striped hoverable
        with-buttons />

    {{-- Custom --}}
    <x-adminlte-modal tabindex="-1" id="modalCustom" title="{{ __('adminlte::adminlte.caution!') }}" theme="danger"
        icon="fas fa-exclamation-triangle" v-centered>
        <div>{{ __('adminlte::adminlte.deleteCaution') }}</div>
        {{-- <div style="font-size: 14px;"><br>{{ __('adminlte::adminlte.deactivateCaution') }}</div> --}}
        <x-slot name="footerSlot">
            {{-- Form for Delete Action --}}
            <form id="formDelete" action="" method="POST">
                @csrf
                @method('DELETE')
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-danger"
                    label="{{ __('adminlte::adminlte.delete') }}" />
            </form>
            {{-- Form for DEACTIVATE Action --}}
            {{-- <form id="formDeactivate" action="" method="POST" style="display:inline;">
                @csrf
                @method('PUT')
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-success"
                    label="{{ __('adminlte::adminlte.deActivate') }}" />
            </form> --}}
            <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}"
                data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
    <x-adminlte-modal tabindex="-1" id="modalActivate" title="{{ __('adminlte::adminlte.activate') }}" theme="success"
        icon="fas fa-question" v-centered>
        <div>{{ __('adminlte::adminlte.activeCaution') }}</div>
        {{-- <iframe src="" frameborder="0" height="200" w></iframe> --}}
        <x-slot name="footerSlot">
            <form id="formActivate" action="" method="POST">
                @csrf
                @method('PUT') {{-- Assuming activation is a PUT request --}}
                <x-adminlte-button class="mr-auto" type="submit" theme="outline-success"
                    label="{{ __('adminlte::adminlte.activate') }}" />
            </form>
            <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
    {{-- Example button to open modal --}}
{{-- PDF Preview Modal --}}
<x-adminlte-modal id="pdfModal" title="{{ __('adminlte::adminlte.preview') }}" size="xl" v-centered scrollable>
    <iframe id="pdfFrame" src="" width="100%" style="min-height: 80vh;" frameborder="0"></iframe>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.close') }}" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>

@include('admin-panel.general.categories.edit')

@stop


@section('plugins.toastr', true)
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('adminlte_js')

    <script>
        $(document).ready(function() {
            $('#modalCustom').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var postId = button.data('id');

                // Set action for the Delete form
                var deleteAction =
                    '{{ route($route . '.destroy', ['locale' => app()->getLocale(), $id => '__ID__']) }}';

                deleteAction = deleteAction.replace('__ID__', postId);
                $('#formDelete').attr('action', deleteAction);

                // Set action for the Deactivate form
                var deactivateAction = '{{ localizedRoute('post.activation', ['id' => '__ID__']) }}';
                deactivateAction = deactivateAction.replace('__ID__', postId);
                $('#formDeactivate').attr('action', deactivateAction);
            });

            $('#modalActivate').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var postId = button.data('id'); // Extract info from data-* attributes
                // Assuming 'customerService.activate' is a route for activating customerService. Adjust as needed.
                var action =
                    '{{ localizedRoute('post.activation', ['id' => '__ID__']) }}'; // Use update route for activation
                action = action.replace('__ID__', postId);
                $('#formActivate').attr('action', action);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
        
            // Handle Edit button click
            $('#categoryEdit').on('show.bs.modal', function (event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const title = button.data('title');
                const title_en = button.data('title_en');
        
                // Fill modal fields
                $('#edit_title').val(title);
                $('#edit_title_en').val(title_en);
        
                // Update form action
                let action = '{{ route($route . ".update", ["locale" => app()->getLocale(), $id => "__ID__"]) }}';
                action = action.replace('__ID__', id);
                $('#formEditCategory').attr('action', action);
            });
        });
        </script>
    <script>
        $('#pdfModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var pdfUrl = button.data('pdf-url');
            var modal = $(this);
            var iframe = modal.find('#pdfFrame');
            if (pdfUrl) {
                iframe.attr('src', pdfUrl);
            } else {
                console.error('No PDF URL found on the triggering button.');
                iframe.attr('src', '');
            }
        });
        $('#pdfModal').on('hidden.bs.modal', function () {
            var modal = $(this);
            var iframe = modal.find('#pdfFrame');
            iframe.attr('src', '');
        });
    </script>

@stop
