@extends('Admin.layouts.index')

@section('title', 'Events')

@section('content')

<h1>All Events</h1>
<a href="{{ route('admin.events.create') }}" class="btn btn-primary">Add New Event</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Registered Count</th>
                <th>Date</th>
                <th>Time</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->capacity }}</td>
                    <td>{{ $event->registered_count }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->event_time }}</td>
                    <td>
                        @if($event->image)
                            <img style="height: 50px;width:50px;border-radius:50%" src="{{ asset($event->image) }}" alt="Post Image" width="100">
                        @else
                            No image
                        @endif
                    </td>                    <td>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
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
