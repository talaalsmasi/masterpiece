<?php $__env->startSection('title', 'Rooms'); ?>
<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('content'); ?>
            <section class="pet_team_wrap">
                <div class="mian_heading text-center"><h2>Rooms</h2></div>

                <div class="container">
                    <div class="pet_team_row">
                        <?php if($rooms->isEmpty()): ?>
                            <p>No rooms available.</p>
                        <?php else: ?>

                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div style="background-color: white;color:black" class="pet_team_column <?php echo e($room->status == 'available' ? 'available-room' : 'unavailable-room'); ?>">
                                    <figure class="image-layer-affect">
                                        <img style="height: 452px;width:360px" src="<?php echo e($room->image); ?>" alt="image">
                                         <div class="pet_team_text">
                                            <h5><?php echo e($room->room_name); ?></h5>
                                            <span>Type: <?php echo e($room->room_type); ?></span>
                                            <span>Price: $<?php echo e($room->price_per_night); ?> per night</span>
                                            <span class="<?php echo e($room->status == 'available' ? 'text-success' : 'text-danger'); ?>">
                                                <?php echo e(ucfirst($room->status)); ?>

                                            </span>
                                        </div>
                                    </figure>
                                    <a href="<?php echo e(route('rooms.show', $room->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="margin-left: 25%">View Details</a><br><br>
                                     <br>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/bookings/rooms.blade.php ENDPATH**/ ?>