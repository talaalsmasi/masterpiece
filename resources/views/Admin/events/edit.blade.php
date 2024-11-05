@extends('Admin.layouts.index')

@section('title', 'Events')

@section('content')

<h1>Edit Event</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Event Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required>{{ $event->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="capacity">Capacity</label>
        <input type="number" name="capacity" id="capacity" class="form-control" value="{{ $event->capacity }}" required>
    </div>

    <div class="form-group">
        <label for="event_date">Event Date</label>
        <input type="date" name="event_date" id="event_date" class="form-control" value="{{ $event->event_date }}" required>
    </div>

    <div class="form-group">
        <label for="event_time">Event Time</label>
        <input type="time" name="event_time" id="event_time" class="form-control" value="{{ $event->event_time }}" required>
    </div>

    <div class="form-group">
        <label for="image">Event Image</label>
        @if($event->image)
            <div class="mb-2">
                <img src="{{ asset($event->image) }}" alt="Event Image" style="width: 150px; height: auto;">
            </div>
        @endif
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Update Event</button>
</form>

@endsection
