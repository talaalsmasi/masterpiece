@extends('Admin.layouts.index')

@section('title', 'Create Adoption Request')

@section('content')
<div class="container">
    <h1 class="mb-4">Create Adoption Request</h1>

    <form action="{{ route('admin.adoptions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pet_id" class="form-label">Select Pet</label>
            <select name="pet_id" id="pet_id" class="form-control">
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="reason" class="form-label">Reason for Adoption</label>
            <textarea name="reason" id="reason" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="can_feed" class="form-label">Can Provide Food?</label>
            <select name="can_feed" id="can_feed" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="can_treat" class="form-label">Can Provide Medical Treatment?</label>
            <select name="can_treat" id="can_treat" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="has_other_pets" class="form-label">Has Other Pets?</label>
            <select name="has_other_pets" id="has_other_pets" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-orange">Submit</button>
    </form>
</div>
@endsection
