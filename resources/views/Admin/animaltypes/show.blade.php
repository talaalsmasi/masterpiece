@extends('Admin.layouts.index')

@section('title', 'View Animal Type')

@section('content')
    <div class="container">
        <h1 class="mb-4">View Animal Type</h1>
        <div class="mb-3">
            <label for="type_name" class="form-label">Type Name</label>
            <input type="text" id="type_name" class="form-control" value="{{ $animalType->type_name }}" readonly>
        </div>
        <a href="{{ route('admin.animaltypes.index') }}" class="btn btn-orange">Back to List</a>
    </div>
    <div style="position: fixed; bottom: -50px; right: 32vh;">
        <img src="{{ asset('Admin/dog3.jpg.png') }}" alt="Dog Image" style="width: 350px; height: auto;">
    </div>
    <div style="position: fixed; bottom: -50px; right: 110vh;">
        <img src="{{ asset('Admin/dog5.jpg.png') }}" alt="Dog Image" style="width: 250px; height: auto;">
    </div>
    <div style="position: fixed; bottom:-10px; right: 75vh;">
        <img src="{{ asset('Admin/dog6.jpg.jpg') }}" alt="Dog Image" style="width: 270px; height:330px;">
    </div>
@endsection
