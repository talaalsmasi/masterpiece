@extends('Admin.layouts.index')

@section('title', 'rooms')

@section('content')
<div class="container">
    <h1>Edit Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="room_name">Room Name</label>
            <input type="text" name="room_name" id="room_name" class="form-control" value="{{ $room->room_name }}">
        </div>

        <div class="form-group">
            <label for="room_type">Room Type</label>
            <input type="text" name="room_type" id="room_type" class="form-control" value="{{ $room->room_type }}">
        </div>

        <div class="form-group">
            <label for="price_per_night">Price per Night</label>
            <input type="number" step="0.01" name="price_per_night" id="price_per_night" class="form-control" value="{{ $room->price_per_night }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="available" {{ $room->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $room->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>

        <button type="submit" class="btn btn-orange">Update Room</button>
    </form>
</div>
@endsection
