@extends('Admin.layouts.index')

@section('title', 'Edit Order Item for Order #' . $order->id)

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Order Item for Order #{{ $order->id }}</h1>

    <form action="{{ route('admin.orders.order_items.update', [$order->id, $orderItem->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="product_id" class="form-label">Product</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $orderItem->product_id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $orderItem->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-orange">Update Order Item</button>
    </form>
</div>
@endsection
