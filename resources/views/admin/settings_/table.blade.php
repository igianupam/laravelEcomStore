@push('third_party_stylesheets')
    @include('includes.datatables_css')
@endpush

<div class="table-responsive">
    {{$dataTable->table(['class'=> 'table table-striped table bordered table-sm'])}}
</div>


@push('third_party_scripts')
    @include('includes.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush
