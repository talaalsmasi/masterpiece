@extends('Admin.layouts.index')

@section('title', 'Events reg')

@section('content')

<h1>All Event Registrations</h1>
<a href="{{ route('admin.event-registrations.create') }}" class="btn btn-primary">Add New Registration</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Event</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->id }}</td>
                <td>{{ $registration->user->name }}</td>
                <td>{{ $registration->event->title }}</td>
                <td>
                    <a href="{{ route('admin.event-registrations.edit', $registration->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.event-registrations.destroy', $registration->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
