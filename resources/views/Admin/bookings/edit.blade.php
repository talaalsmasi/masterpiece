@extends('Admin.layouts.index')

@section('title', 'Edit Booking')

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
        <h1 class="mb-4">Edit Booking</h1>

        <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Owner (User) Dropdown -->
            <div class="mb-3">
                <label for="user_id" class="form-label">Owner</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($user->id == $booking->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Pet Dropdown -->
            <div class="mb-3">
                <label for="pet_id" class="form-label">Pet</label>
                <select name="pet_id" id="pet_id" class="form-control" required>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}" @if($pet->id == $booking->pet_id) selected @endif>{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Check-in Date -->
            <div class="mb-3">
                <label for="check_in_date" class="form-label">Check-in Date</label>
                <input type="date" name="check_in_date" class="form-control" value="{{ old('check_in_date', \Carbon\Carbon::parse($booking->check_in_date)->format('Y-m-d')) }}" required>
            </div>

            <!-- Check-out Date -->
            <div class="mb-3">
                <label for="check_out_date" class="form-label">Check-out Date</label>
                <input type="date" name="check_out_date" class="form-control" value="{{ old('check_out_date', \Carbon\Carbon::parse($booking->check_out_date)->format('Y-m-d')) }}" required>
            </div>

            <!-- Status Dropdown -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="pending" @if($booking->status == 'pending') selected @endif>Pending</option>
                    <option value="approved" @if($booking->status == 'approved') selected @endif>Approved</option>
                    <option value="rejected" @if($booking->status == 'rejected') selected @endif>Rejected</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-orange">Update</button>
        </form>
    </div>
@endsection
