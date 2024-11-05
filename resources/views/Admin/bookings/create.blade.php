@extends('Admin.layouts.index')

@section('title', 'Add New Booking')

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
        <h1 class="mb-4">Add New Booking</h1>
        <form action="{{ route('admin.bookings.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Owner</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pet_id" class="form-label">Pet</label>
                <select name="pet_id" id="pet_id" class="form-control" required>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="check_in_date" class="form-label">Check-in Date</label>
                <input type="date" name="check_in_date" class="form-control" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3">
                <label for="check_out_date" class="form-label">Check-out Date</label>
                <input type="date" name="check_out_date" class="form-control" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-orange">Save</button>
        </form>
    </div>
@endsection
