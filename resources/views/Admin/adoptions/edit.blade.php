@extends('Admin.layouts.index')

@section('title', 'Edit Adoption Request')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Adoption Request</h1>

    <form action="{{ route('admin.adoptions.update', $adoption->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $adoption->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $adoption->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $adoption->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-orange">Update</button>
    </form>
</div>
@endsection
