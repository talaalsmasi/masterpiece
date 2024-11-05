@extends('Admin.layouts.index')

@section('title', 'Events')

@section('content')

<h1>Create New Event</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Event Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="capacity">Capacity</label>
        <input type="number" name="capacity" id="capacity" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="event_date">Event Date</label>
        <input type="date" name="event_date" id="event_date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="event_time">Event Time</label>
        <input type="time" name="event_time" id="event_time" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="image">Event Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Event</button>
</form>

@endsection
