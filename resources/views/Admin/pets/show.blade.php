@extends('Admin.layouts.index')

@section('title', 'Pet Details')

@section('content')

    <div class="container">
        <h1 class="mb-4">Pet Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $pet->name }}</h5>
                <p class="card-text"><strong>Animal Type:</strong> {{ $pet->animalType->name }}</p>
                <p class="card-text"><strong>Breed:</strong> {{ $pet->breed }}</p>
                <p class="card-text"><strong>Birthday:</strong> {{ $pet->birthday }}</p>
                <p class="card-text"><strong>Owner:</strong> {{ $pet->user->name }}</p>
                <p class="card-text"><strong>Appointments:</strong>
                    @if($pet->appointments->count() > 0)
                        <ul>
                            @foreach($pet->appointments as $appointment)
                                <li>{{ $appointment->service->name }} on {{ $appointment->appointment_date }}</li>
                            @endforeach
                        </ul>
                    @else
                        No appointments
                    @endif
                </p>
                <a href="{{ route('admin.pets.edit', $pet->id) }}" class="btn btn-orange">Edit</a>
                <a href="{{ route('admin.pets.index') }}" class="btn btn-orange">Back</a>
            </div>
        </div>
    </div>
    <div style="position: fixed; bottom: -50px; right: 32vh;">
        <img src="{{ asset('Admin/dog3.jpg.png') }}" alt="Dog Image" style="width: 350px; height: auto;">
    </div>
    <div style="position: fixed; bottom: -50px; right: 110vh;">
        <img src="{{ asset('Admin/dog5.jpg.png') }}" alt="Dog Image" style="width: 250px; height: auto;">
    </div>
    <div style="position: fixed; bottom:-10px; right: 75vh;">
        <img src="{{ asset('Admin/dog6.jpg.jpg') }}" alt="Dog Image" style="width: 270px; height:330px;">
    </div>
@endsection
