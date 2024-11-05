@extends('doctor.layouts.index')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <h1>Doctor Information</h1>

    {{-- عرض الرسالة بعد التحديث --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- عرض معلومات الطبيب --}}
    <div class="form-group">
        <label for="name">Name:</label>
        <p>{{ $doctor->name }}</p>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <p>{{ $doctor->email }}</p>
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <p>{{ $doctor->phone }}</p>
    </div>

    <div class="form-group">
        <label for="about">About:</label>
        <p>{{ $doctor->doctor->about ?? 'No information provided' }}</p>
    </div>

    <div class="form-group">
        <label for="image">Profile Image:</label><br>
        @if($doctor->image)
            <img src="{{ asset($doctor->image) }}" alt="Profile Image" width="100" height="100">
        @else
            <p>No image available</p>
        @endif
    </div>

    {{-- زر لتعديل المعلومات --}}
    <a href="{{ route('doctor.edit') }}" class="btn btn-primary">Edit Information</a>
</div>
@endsection
