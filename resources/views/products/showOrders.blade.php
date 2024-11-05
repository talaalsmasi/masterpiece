@extends('layouts.index')
@section('from', 'Profile')
@section('title', 'show your orders')
@section('content')
            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Orders Details</h2>

                    <div class="row">
                        @foreach($orders as $orderDetail)
                            <div class="col-md-6">
                                <div class="card mb-3" style="background-color: #f6f5f5; background-image: url('{{ asset('images/service-bg-paw.png') }}'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px;">
                                    <div class="card-body" style="padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
                                        <div class="appointment-details">
                                            @if($orderDetail['order']->created_at)
                                                <h5><b>Order Date:</b> {{ $orderDetail['order']->created_at->format('d M Y') }}</h5>
                                            @else
                                                <h5><b><i class="fa-solid fa-calendar-days" style="color: rgb(255, 139, 39);"></i> Order Date:</b> N/A</h5>
                                            @endif
                                            <h5><b><i class="fa-solid fa-credit-card" style="color: #ff8b27;"></i> Payment Method:</b> {{ ucfirst($orderDetail['order']->payment_method) }}</h5>
                                            <h5><b><i class="fa-solid fa-barcode" style="color: #ff8b27;"></i> Total Price:</b> {{ number_format($orderDetail['order']->total_price, 2) }} JD</h5>
                                            <h5><b><i class="fa-solid fa-truck" style="color: #ff8b27;"></i> Status:</b> {{ ucfirst($orderDetail['order']->status) }}</h5>

                                            <!-- زر لعرض العناصر في الـ Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemsModal-{{ $orderDetail['order']->id }}">
                                                View Items
                                            </button>

                                            <!-- Modal لعرض العناصر -->
                                            <div class="modal fade" id="itemsModal-{{ $orderDetail['order']->id }}" tabindex="-1" aria-labelledby="itemsModalLabel-{{ $orderDetail['order']->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="itemsModalLabel-{{ $orderDetail['order']->id }}">Items</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul>
                                                                @foreach($orderDetail['items'] as $item)
                                                                    <li>{{ $item->product->name }} - Quantity: {{ $item->quantity }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <script>
                // دالة لفتح النافذة المنبثقة
function openPopup(orderId) {
    const popup = document.getElementById('popup-' + orderId);
    const overlay = document.getElementById('popup-overlay');

    popup.style.display = 'block';
    overlay.style.display = 'block';
}

// دالة لإغلاق النافذة المنبثقة
function closePopup(orderId) {
    const popup = document.getElementById('popup-' + orderId);
    const overlay = document.getElementById('popup-overlay');

    popup.style.display = 'none';
    overlay.style.display = 'none';
}

            </script>

@endsection
