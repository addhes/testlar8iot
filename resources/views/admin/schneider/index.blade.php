@extends('layouts.appadmin')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah </h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-info" href="{{ route('dev-create') }}">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>DateTime</th>
                        <th>Value1</th>
                        <th>Value2</th>
                        <th>Device ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schneider as $key => $data)    
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $data->datetime }}</td>
                        <td>{{ $data->value_1 }}</td>
                        <td>{{ $data->value_2 }}</td>
                        <td>{{ $data->device_id }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('dev-edit', $data->id)}}">Edit</a>
                            {{-- <a class="btn btn-warning" href="{{ route('de') }}">Edit</a> --}}
                            <a class="btn btn-danger" href="{{ route('dev-destroy', $data->id) }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('css')
<!-- Custom styles for this page -->
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('js')
<!-- Page level plugins -->
<script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
@endpush
