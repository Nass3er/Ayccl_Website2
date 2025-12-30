@extends('adminlte::page')
@section('title', __('adminlte::menu.documents'))

@section('content_header')
    <h1>{{ __('adminlte::menu.documents') }}</h1>
@stop

@section('content')
    @include('admin-panel.modals')

    
    <div class="container mx-0  mb-5">
        <a href="{{ route('documents.create', ['locale', app()->getLocale()]) }}">
            <x-adminlte-button class="btn-lg mb-10" type="reset" label="{{ __('adminlte::adminlte.createNewPost') }}" theme="outline-success" icon="fas fa-file-far fa-plus-square	"/>
        </a>
        @include('admin-panel.general.pages.edit')

    </div>
    <!-- Alert for success messages -->

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

    @php
    function formatSize($bytes)
        {
            if ($bytes >= 1073741824) {
                return number_format($bytes / 1073741824, 2) . '<span style="color:crimson">GB</span>';
            }
            if ($bytes >= 1048576) {
                return number_format($bytes / 1048576, 2) . '<span style="color:crimson">MB</span>';
            }
            if ($bytes >= 1024) {
                return number_format($bytes / 1024, 2) . '<span style="color:crimson">KB</span>';
            }
            if ($bytes > 1) {
                return $bytes . '<span style="color:crimson">Bytes</span>';
            }
            if ($bytes == 1) {
                return $bytes . '<span style="color:crimson">Byte</span>';
            }
            return '0 bytes';
        }

    $heads = [
        ['label' => 'ID', 'width' => 3, 'classes' => 'border border-white bg-olive'],
        ['label' => __('adminlte::adminlte.title'), 'classes' => 'border border-white bg-olive'],
        ['label' => __('adminlte::adminlte.size'), 'classes' => 'border border-white bg-olive'],
        [
            'label' => __('adminlte::adminlte.preview'),
            'classes' => 'border border-white bg-olive',
            'no-export' => true,
            'width' => 15,
        ],
        [
            'label' => __('adminlte::adminlte.procedures'),
            'classes' => 'border border-white bg-olive',
            'no-export' => true,
            'width' => 13,
        ],
    ];
    
    $data = [];
    foreach ($posts as $post) {
        $postDetail = $post->postDetailOne;
        
        // Check if the file is a PDF to decide whether to show the preview button
        $isPdf = $post->mediaOne && preg_match('/\.pdf$/i', $post->mediaOne->filepath);
        
        $btnPreview = 'none';
        if ($isPdf) {
            $btnPreview =
                '<button class="btn btn-outline-danger" data-toggle="modal" data-target="#pdfModal" data-pdf-url="' .
                asset($post->mediaOne->filepath) .
                '"><i class="fas fa-file-pdf"></i></button>';
        }

        $btnEdit =
            '<a href="' .
            route('documents.edit', ['document' => $post->id, 'locale' => app()->getLocale()]) .
            '" class="btn btn-warning " data-toggle="tooltip" title="' .
            __('adminlte::adminlte.edit') .
            '"><i class="fas fa-edit"></i></a>';
            
        $btnDelete =
            '<span style="display: inline-block; " data-toggle="tooltip" title="' . __('adminlte::adminlte.delete') . ' "><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalCustom" data-id="' .
            $post->id .
            '"><i class="fas fa-trash"></i></button></span>';

        $btnActivation =
            '<span data-toggle="tooltip" title="' . __('adminlte::adminlte.activate') . ' "><a href="#" class="btn btn-success " data-toggle="modal" data-target="#modalActivate" data-id="' .
            $post->id .
            '"><i class="fas fa-eye"></i></a></span>';

        $data[] = [
            $post->id,
            \Illuminate\Support\Str::limit(strip_tags($postDetail?->title), limit: 75),
            isset($post->mediaOne->link)?formatSize(\Illuminate\Support\Facades\File::size($post->mediaOne->link)):'none',
            $btnPreview,
            $btnEdit .' '. ($post->active ? $btnDelete : $btnActivation  . ' ' . $btnDelete),
            ];
    }
    
    $config = [
        'data' => $data,
        'order' => [[0, 'asc']],
        'columns' => [null, null, null, null, ['orderable' => false]],
        'escape' => false,
        'scrollX' => true,
        'dom' => 'fBrtp',
        'paging' => true,
        'pagingType' => 'full_numbers',
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

{{-- Custom Modal for Deletion --}}
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
        <form id="formDeactivate" action="" method="POST" style="display:inline;">
            @csrf
            @method('PUT')
            <x-adminlte-button class="mr-auto" type="submit" theme="outline-success"
                label="{{ __('adminlte::adminlte.deActivate') }}" />
        </form>
        <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}"
            data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>

{{-- Custom Modal for Activation --}}
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

{{-- PDF Preview Modal --}}
<x-adminlte-modal id="pdfModal" title="{{ __('adminlte::adminlte.preview') }}" size="xl" v-centered scrollable>
    <iframe id="pdfFrame" src="" width="100%" style="min-height: 80vh;" frameborder="0"></iframe>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.close') }}" data-dismiss="modal" />
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
                var postId = button.data('id');

                // Set action for the Delete form
                var deleteAction =
                    '{{ route('documents.destroy', ['locale' => app()->getLocale(), 'document' => '__ID__']) }}';
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
                // Assuming 'documents.activate' is a route for activating documents. Adjust as needed.
                var action =
                    '{{ localizedRoute('post.activation', ['id' => '__ID__']) }}'; // Use update route for activation
                action = action.replace('__ID__', postId);
                $('#formActivate').attr('action', action);
            });
        });
    </script>

@stop

@push('js')
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
@endpush