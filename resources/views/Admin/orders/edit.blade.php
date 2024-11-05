@extends('Admin.layouts.index')

@section('title', 'Edit Order')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Order</h1>

    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">Buyer</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @if($user->id == $order->user_id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="total_price" class="form-label">Total Price</label>
            <input type="number" step="0.01" name="total_price" id="total_price" class="form-control" value="{{ $order->total_price }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" @if($order->status == 'pending') selected @endif>Pending</option>
                <option value="completed" @if($order->status == 'completed') selected @endif>Completed</option>
                <option value="cancelled" @if($order->status == 'cancelled') selected @endif>Cancelled</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="payment_method" class="form-label">Payment Method</label>
            <select name="payment_method" id="payment_method" class="form-control" required>
                <option value="Visa" @if($order->payment_method == 'Visa') selected @endif>Visa</option>
                <option value="Cash" @if($order->payment_method == 'Cash') selected @endif>Cash</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $order->address }}" required>
        </div>

        <button type="submit" class="btn btn-orange">Update</button>
    </form>
</div>
@endsection
