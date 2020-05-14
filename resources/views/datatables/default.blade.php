@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <h3>{{ $dataTableTitle }}</h3>
                    <hr>

                    {!! $dataTable->table() !!}

                </div>
            </div>

        </div>

        <div class="col-lg-4">
            @include('layouts.facebook-page-widget')
            @include('layouts.suggested-projects-widget')
        </div>

    </div>
    <br>
@endsection


@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
@endpush
@push('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js" defer ></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endpush
