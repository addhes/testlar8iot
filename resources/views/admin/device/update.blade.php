@extends('layouts.appadmin')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Update Device</h1>    

<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
    {{-- <form action="{{ route('device-update', $device->id) }}" method="POST"> --}}

    <form action="{{ route('dev-update', $device->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="exampleInputEmail1">Code</label>
            <input type="text" class="form-control" name="code" placeholder="Enter code" value="{{ $device->code }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $device->name }}">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="status" type="radio" value="1" {{ ($device->status == 1) ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio1">Aktif</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="status" type="radio" value="0" {{ ($device->status == 0) ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio2">NonAktif</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
@endsection
