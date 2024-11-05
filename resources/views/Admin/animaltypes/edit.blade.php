@extends('Admin.layouts.index')

@section('title', 'Edit Animal type')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <h1 class="mb-4">Edit Animal Type</h1>
        <form action="{{ route('admin.animaltypes.update', $animalType->id) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="type_name" class="form-label">Type Name</label>
                <input type="text" name="type_name" id="type_name" class="form-control" value="{{ $animalType->type_name }}" required>
            </div>
            <button type="submit" class="btn btn-orange">Update</button>
        </form>
    </div>
@endsection
