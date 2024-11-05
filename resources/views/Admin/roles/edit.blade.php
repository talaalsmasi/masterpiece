@extends('Admin.layouts.index')

@section('title', 'Edit Role')

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
        <h1 class="mb-4">Edit Role</h1>
        <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Role Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}" required>
            </div>
            <button type="submit" class="btn btn-orange">Update</button>
        </form>
    </div>
@endsection
