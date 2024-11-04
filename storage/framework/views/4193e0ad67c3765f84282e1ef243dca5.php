<?php $__env->startSection('from', 'Rooms'); ?>
<?php $__env->startSection('title', 'room details'); ?>
<?php $__env->startSection('content'); ?>

            <section class="child_service_wrap blog-full">
                <div class="container">
                    <div class="child_service_row">
                        <div class="child_service_column">
                            <figure class="image-layer-affect">
                                <img style="height: 550px;width:565px" src="<?php echo e(asset($room->image)); ?>" alt="">
                            </figure>
                            <div class="child_service_text">
                                <div><br><br>
                                    <div><h5><?php echo e($room->room_name); ?>'s Details </h5></div>
                                    <p class="card-text"><b>Type:</b> <?php echo e($room->room_type); ?></p>
                                    <p class="card-text"><b>Price:</b> <?php echo e($room->price_per_night); ?>JD per night </p>
                                    <p class="<?php echo e($room->status == 'available' ? 'text-success' : 'text-danger'); ?>">
                                        <?php echo e(ucfirst($room->status)); ?>

                                    </p><br><br>

                                    <!-- تعديل الزر ليصبح غير قابل للنقر إذا كانت الغرفة غير متاحة -->
                                    <a
                                        href="<?php echo e($room->status == 'available' ? route('book-room', $room->id) : '#'); ?>"
                                        class="main_button btn2 bdr-clr hover-affect <?php echo e($room->status == 'unavailable' ? 'disabled-link' : ''); ?>"
                                        <?php echo e($room->status == 'unavailable' ? 'disabled' : ''); ?>

                                    >
                                        <?php echo e($room->status == 'available' ? 'Book Now' : 'Unavailable'); ?>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- إضافة CSS لتعطيل الزر بصريًا -->
            <style>
                .disabled-link {
                    pointer-events: none; /* تعطيل النقر */
                    opacity: 0.5; /* جعل الزر غير واضح */
                    cursor: not-allowed; /* تغيير شكل المؤشر */
                }
            </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/bookings/showDetails.blade.php ENDPATH**/ ?>