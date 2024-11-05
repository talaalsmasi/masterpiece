@extends('Admin.layouts.index')

@section('title', 'Edit Appointment')

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
        <h1 class="mb-4">Edit Appointment</h1>
        <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user_id" class="form-label">Owner</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($user->id == $appointment->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pet_id" class="form-label">Pet</label>
                <select name="pet_id" id="pet_id" class="form-control" required>
                    @foreach($pets as $pet)
                        <option value="{{ $pet->id }}" @if($pet->id == $appointment->pet_id) selected @endif>{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3" id="doctor-section">
                <label for="doctor_id" class="form-label">Doctor</label>
                <select name="doctor_id" id="doctor_id" class="form-control" required>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}" @if($doctor->id == $appointment->doctor_id) selected @endif>{{ $doctor->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="service_id" class="form-label">Service</label>
                <select name="service_id" id="service_id" class="form-control" required>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" @if($service->id == $appointment->service_id) selected @endif>{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ $appointment->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ $appointment->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
            <div class="mb-3" id="appointment_date-section">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" id="appointment_date"
                value="{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3" id="time-section">
                <label for="appointment_time" class="form-label">Appointment Time</label>
                <select name="appointment_time" id="appointment_time" class="form-control" required>
                    @foreach ([
                        '10:00 AM - 10:30 AM', '10:30 AM - 11:00 AM', '11:00 AM - 11:30 AM', '11:30 AM - 12:00 PM',
                        '12:00 PM - 12:30 PM', '12:30 PM - 01:00 PM', '01:30 PM - 02:00 PM', '02:00 PM - 02:30 PM',
                        '02:30 PM - 03:00 PM', '03:00 PM - 03:30 PM', '03:30 PM - 04:00 PM', '04:00 PM - 04:30 PM',
                        '04:30 PM - 05:00 PM', '05:00 PM - 05:30 PM', '05:30 PM - 06:00 PM'
                    ] as $timeSlot)
                        <option value="{{ $timeSlot }}" @if($appointment->appointment_time == $timeSlot) selected @endif>
                            {{ $timeSlot }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3" id="checkin-section" style="display:none;">
                <label for="checkin_date" class="form-label">Check-in Date</label>
                <input type="date" name="checkin_date" class="form-control" id="checkin_date">
            </div>
            <div class="mb-3" id="checkout-section" style="display:none;">
                <label for="checkout_date" class="form-label">Checkout Date</label>
                <input type="date" name="checkout_date" class="form-control" id="checkout_date">
            </div>
            <button type="submit" class="btn btn-orange">Update</button>
        </form>
    </div>
@endsection


