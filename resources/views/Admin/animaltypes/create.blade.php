@extends('Admin.layouts.index')

@section('title', 'Add Animal Type')

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
        <h1 class="mb-4">Add New Animal Type</h1>
        <form action="{{ route('admin.animaltypes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type_name" class="form-label">Type Name</label>
                <input type="text" name="type_name" id="type_name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-orange">Save</button>
        </form>
    </div>
@endsection
