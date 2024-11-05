@extends('Admin.layouts.index')

@section('title', 'Add Pet')

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
        <h1 class="mb-4">Add Pet</h1>
        <form action="{{ route('admin.pets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
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
                <input type="text" name="breed" class="form-control" id="breed">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="birthday">
            </div>
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div> --}}
            <div class="pet_appointment_colum">
                <h6><i class="fas fa-image" style="color: #ff8931;"></i> Pet Image:</h6>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">Owner</label>
                <select name="user_id" class="form-control" id="user_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-orange">Add Pet</button>
        </form>
    </div>
@endsection
