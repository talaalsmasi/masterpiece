@extends('Admin.layouts.index')

@section('title', 'Appointments')

@section('content')
    <div class="container">
        <h1 class="mb-4">Appointments</h1>
        <a href="{{ route('admin.appointments.create') }}" class="btn btn-orange"><i class="fa-solid fa-plus"></i> Appointment</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Owner</th>
                    <th>Pet</th>
                    <th>Doctor</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->user->name }}</td>
                        <td>{{ $appointment->pet->name }}</td>
                        <td>{{ $appointment->doctor->user->name }}</td>
                        <td>{{ $appointment->service->name }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->appointment_time }}</td>
                        <td>{{ ucfirst($appointment->status) }}</td>
                        <td>
                            {{-- استبدال الأزرار بأيقونات --}}
                            <a href="{{ route('admin.appointments.show', $appointment->id) }}" style="color: #E17E2A; text-decoration:none; font-size:20px">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.appointments.edit', $appointment->id) }}" style="color: #E17E2A; text-decoration:none; font-size:20px">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none; border:none; color:#E17E2A; font-size:20px;">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                {{-- <div style="position: fixed; bottom:560px; right:300px;">
                    <img src="{{ asset('Admin/dog0.jpg') }}" alt="Dog Image" style="width: 200px; height: auto;">
                </div>
                <div style="position: fixed; bottom: 10px; right: -20px;">
                    <img src="{{ asset('Admin/dog2.jpg.png') }}" alt="Dog Image" style="width: 200px; height: auto;">
                </div> --}}
            </tbody>
        </table>
    </div>
@endsection
