@extends('Admin.layouts.index')

@section('title', 'Category Details')

@section('content')
    <div class="container">
        <h1 class="mb-4">Category Details</h1>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <p>{{ $category->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <p>{{ $category->description }}</p>
        </div>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-orange">Back</a>
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