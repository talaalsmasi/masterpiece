@extends('Admin.layouts.index')

@section('title', 'Events reg')

@section('content')
<h1>Create Event Registration</h1>

<form action="{{ route('admin.event-registrations.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="user_id">User</label>
        <select name="user_id" class="form-control">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="event_id">Event</label>
        <select name="event_id" class="form-control">
            @foreach($events as $event)
                <option value="{{ $event->id }}">{{ $event->title }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Registration</button>
</form>

@endsection
