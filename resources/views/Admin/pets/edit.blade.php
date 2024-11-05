@extends('Admin.layouts.index')

@section('title', 'Edit Pet')

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
        <h1 class="mb-4">Edit Pet</h1>
        <form action="{{ route('admin.pets.update', $pet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $pet->name }}" required>
            </div>
            <div class="form-group">
                <label for="animal_type">Animal Type</label>
                <select name="animal_type_id" id="animal_type" class="form-control">
                    <option value="">Select Animal Type</option>
                    @foreach($animalTypes as $animalType)
                        <option value="{{ $animalType->id }}">{{ $animalType->type_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" name="breed" class="form-control" id="breed" value="{{ $pet->breed }}">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $pet->birthday }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                @if($pet->image)
                    <img src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}" class="img-thumbnail mt-2" width="150">
                @endif
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">Owner</label>
                <select name="user_id" class="form-control" id="user_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($user->id == $pet->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-orange">Update Pet</button>
        </form>
    </div>
@endsection
