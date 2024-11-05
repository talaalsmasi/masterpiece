@extends('Admin.layouts.index')

@section('title', 'Animal Types')

@section('content')

    <div class="container">
        <h1 class="mb-4">Animal Types</h1>
        <a href="{{ route('admin.animaltypes.create') }}" class="btn btn-orange"><i class="fa-solid fa-plus"></i> Animal Type</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($animalTypes as $animalType)
                    <tr>
                        <td>{{ $animalType->id }}</td>
                        <td>{{ $animalType->type_name }}</td>
                        <td>
                            {{-- استبدال الأزرار بأيقونات --}}
                            <a href="{{ route('admin.animaltypes.edit', $animalType->id) }}" style="color: #E17E2A; text-decoration:none; font-size:20px">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.animaltypes.destroy', $animalType->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none; border:none; color:#E17E2A; font-size:20px;" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                <div style="position: fixed; bottom:560px; right:300px;">
                    <img src="{{ asset('Admin/dog0.jpg') }}" alt="Dog Image" style="width: 200px; height: auto;">
                </div>
                <div style="position: fixed; bottom: 10px; right: -20px;">
                    <img src="{{ asset('Admin/dog2.jpg.png') }}" alt="Dog Image" style="width: 200px; height: auto;">
                </div>
            </tbody>
        </table>
    </div>
@endsection
