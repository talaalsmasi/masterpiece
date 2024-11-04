<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'show your orders'); ?>
<?php $__env->startSection('content'); ?>
            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Orders Details</h2>

                    <div class="row">
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="card mb-3" style="background-color: #f6f5f5; background-image: url('<?php echo e(asset('images/service-bg-paw.png')); ?>'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px;">
                                    <div class="card-body" style="padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
                                        <div class="appointment-details">
                                            <?php if($orderDetail['order']->created_at): ?>
                                                <h5><b>Order Date:</b> <?php echo e($orderDetail['order']->created_at->format('d M Y')); ?></h5>
                                            <?php else: ?>
                                                <h5><b><i class="fa-solid fa-calendar-days" style="color: rgb(255, 139, 39);"></i> Order Date:</b> N/A</h5>
                                            <?php endif; ?>
                                            <h5><b><i class="fa-solid fa-credit-card" style="color: #ff8b27;"></i> Payment Method:</b> <?php echo e(ucfirst($orderDetail['order']->payment_method)); ?></h5>
                                            <h5><b><i class="fa-solid fa-barcode" style="color: #ff8b27;"></i> Total Price:</b> <?php echo e(number_format($orderDetail['order']->total_price, 2)); ?> JD</h5>
                                            <h5><b><i class="fa-solid fa-truck" style="color: #ff8b27;"></i> Status:</b> <?php echo e(ucfirst($orderDetail['order']->status)); ?></h5>

                                            <!-- زر لعرض العناصر في الـ Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemsModal-<?php echo e($orderDetail['order']->id); ?>">
                                                View Items
                                            </button>

                                            <!-- Modal لعرض العناصر -->
                                            <div class="modal fade" id="itemsModal-<?php echo e($orderDetail['order']->id); ?>" tabindex="-1" aria-labelledby="itemsModalLabel-<?php echo e($orderDetail['order']->id); ?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="itemsModalLabel-<?php echo e($orderDetail['order']->id); ?>">Items</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul>
                                                                <?php $__currentLoopData = $orderDetail['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li><?php echo e($item->product->name); ?> - Quantity: <?php echo e($item->quantity); ?></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/products/ShowOrders.blade.php ENDPATH**/ ?>