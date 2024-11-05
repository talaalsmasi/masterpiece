@extends('Admin.layouts.index')

@section('title', 'Edit Donation')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Donation</h1>

    <form action="{{ route('admin.donations.update', $donation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="rescue_animal_id" class="form-label">Rescue Animal</label>
            <select name="rescue_animal_id" id="rescue_animal_id" class="form-control" required>
                @foreach($rescueAnimals as $animal)
                    <option value="{{ $animal->id }}" {{ $animal->id == $donation->rescue_animal_id ? 'selected' : '' }}>
                        {{ $animal->pet->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Donor</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $donation->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" required step="0.01" value="{{ $donation->amount }}">
        </div>

        <button type="submit" class="btn btn-orange">Update Donation</button>
    </form>
</div>
@endsection
