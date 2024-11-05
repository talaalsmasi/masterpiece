@extends('Admin.layouts.index')

@section('title', 'Add Order Item to Order #' . $order->id)

@section('content')
<div class="container">
    <h1 class="mb-4">Add Order Item to Order #{{ $order->id }}</h1>

    <form action="{{ route('admin.orders.order_items.store', $order->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Product</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-orange">Add Order Item</button>
    </form>
</div>
@endsection
