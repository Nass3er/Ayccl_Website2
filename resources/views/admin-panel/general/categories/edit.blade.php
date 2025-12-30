{{-- Category Edit Modal --}}
<x-adminlte-modal id="categoryEdit" title="{{ __('adminlte::adminlte.categoryEdit') }}" theme="warning" icon="fas fa-edit"
    size="lg" v-centered scrollable>
    <form id="formEditCategory" action="" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-md-6">
                <x-adminlte-input name="title" id="edit_title"
                    label="{{ __('adminlte::adminlte.title(AR)') }}" label-class="text-olive" required />
            </div>

            <div class="col-12 col-md-6">
                <x-adminlte-input name="title_en" id="edit_title_en"
                    label="{{ __('adminlte::adminlte.title(EN)') }}" label-class="text-olive" />
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <x-adminlte-button type="submit" theme="success" icon="fas fa-save"
                    label="{{ __('adminlte::adminlte.save') }}" class="col-12 col-md-6" />
            </div>
        </div>
    </form>

    <x-slot name="footerSlot">
        <x-adminlte-button theme="secondary" label="{{ __('adminlte::adminlte.cancel') }}" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>
@section('adminlte_js')
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
@endsection
