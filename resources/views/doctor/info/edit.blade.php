@extends('doctor.layouts.index')
@section('title', 'Dashboard')
@section('content')

<div class="container">
    <h1>Edit Doctor Information</h1>

    {{-- عرض أخطاء التحقق --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctor.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- حقل تعديل اسم الطبيب -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $doctor->name) }}" required>
        </div>

        <!-- حقل تعديل بريد الطبيب -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $doctor->email) }}" required>
        </div>

        <!-- حقل تعديل رقم الهاتف -->
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $doctor->phone) }}" required>
        </div>

        <!-- حقل تعديل "عن الطبيب" -->
        <div class="form-group">
            <label for="about">About:</label>
            <textarea class="form-control" id="about" name="about" rows="4">{{ old('about', $doctor->doctor->about ?? '') }}</textarea>
        </div>

        <!-- حقل تعديل الصورة الشخصية -->
        <div class="form-group">
            <label for="image">Profile Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($doctor->image)
                <img src="{{ asset($doctor->image) }}" alt="Profile Image" width="100" height="100">
            @endif
        </div>

        <!-- زر تحديث المعلومات -->
        <button type="submit" class="btn btn-primary">Update Information</button>
    </form>
</div>

@endsection
