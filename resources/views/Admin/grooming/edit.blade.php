@extends('Admin.layouts.index')

@section('title', 'Edit Grooming Appointment')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Grooming Appointment</h1>

    <form action="{{ route('admin.grooming.update', $grooming->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">Owner</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @if($user->id == $grooming->user_id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pet_id" class="form-label">Pet</label>
            <select name="pet_id" id="pet_id" class="form-control" required>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}" @if($pet->id == $grooming->pet_id) selected @endif>{{ $pet->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="appointment_date" class="form-label">Appointment Date</label>
            <input type="date" name="appointment_date" id="appointment_date" class="form-control" value="{{ $grooming->appointment_date }}" required>
        </div>

        <div class="mb-3">
            <label for="appointment_time" class="form-label">Appointment Time</label>
            <input type="time" name="appointment_time" id="appointment_time" class="form-control" value="{{ $grooming->appointment_time }}" required>
        </div>

        <div class="mb-3">
            <label for="service_id" class="form-label">Service</label>
            <select name="service_id" id="service_id" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" @if($service->id == $grooming->service_id) selected @endif>{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" @if($grooming->status == 'pending') selected @endif>Pending</option>
                <option value="approved" @if($grooming->status == 'approved') selected @endif>Approved</option>
                <option value="rejected" @if($grooming->status == 'rejected') selected @endif>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-orange">Update</button>
    </form>
</div>
@endsection
