@extends('Admin.layouts.index')

@section('title', 'Edit Brooming Service')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Grooming Service</h1>

    <form action="{{ route('admin.grooming_services.update', $groomingService->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Service Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $groomingService->name }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $groomingService->price }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea name="description" id="description" class="form-control">{{ $groomingService->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-orange">Update</button>
    </form>
</div>
@endsection
