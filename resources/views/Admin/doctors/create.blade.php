<!-- resources/views/Admin/doctors/create.blade.php -->
@extends('Admin.layouts.index')

@section('title', 'Add New Doctor')

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
        <h1 class="mb-4">Add New Doctor</h1>
        <form action="{{ route('admin.doctors.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Select User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="about" class="form-label">About</label>
                <input type="text" name="about" class="form-control" id="about" required>
            </div>
            <button type="submit" class="btn btn-orange" >Save</button>
        </form>
    </div>
@endsection
