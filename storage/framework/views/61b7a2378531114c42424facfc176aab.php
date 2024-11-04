<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'show bookings'); ?>
<?php $__env->startSection('content'); ?>  <br>
            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Booking Details</h2>

                    <?php if($bookings->isEmpty()): ?>
                        <p>No bookings found for this pet.</p>
                    <?php else: ?>
                        <div class="row">
                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <div class="card mb-3" style="background-color: #f6f5f5; background-image: url('<?php echo e(asset('images/service-bg-paw.png')); ?>'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px;">
                                        <div class="card-body" style="padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
                                            <div class="booking-details">
                                                <h5><strong><i class="fas fa-paw" style="color: #ff8931;"></i> Pet Details</strong></h5>
                                                <p><strong>Pet Name:</strong> <?php echo e(optional($booking->pet)->name); ?></p>
                                                <p><strong>Breed:</strong> <?php echo e(optional($booking->pet)->breed ?? 'Unknown'); ?></p>
                                                <p><strong>Animal Type:</strong> <?php echo e(optional($booking->pet->animalType)->type_name ?? 'Unknown'); ?></p>

                                                <?php if(isset($booking->pet->birthday)): ?>
                                                    <?php
                                                        $birthday = \Carbon\Carbon::parse($booking->pet->birthday);
                                                        $now = \Carbon\Carbon::now();
                                                        $ageYears = $birthday->diffInYears($now);
                                                        $ageMonths = $birthday->diffInMonths($now) % 12;
                                                    ?>

                                                    <p>
                                                        <strong>Age:</strong>
                                                        <?php if($ageYears > 0): ?>
                                                            <?php echo e($ageYears); ?> years
                                                        <?php endif; ?>
                                                        <?php if($ageMonths > 0): ?>
                                                            <?php echo e($ageMonths); ?> months
                                                        <?php endif; ?>
                                                    </p>
                                                <?php else: ?>
                                                    <p><strong>Age:</strong> Unknown</p>
                                                <?php endif; ?> <br>

                                                <h5><strong><i class="fas fa-home" style="color: #ff8931;"></i> Room Details</strong></h5>
                                                <p><strong>Room Name:</strong> <?php echo e(optional($booking->room)->room_name); ?></p>
                                                <p><strong>Room Type:</strong> <?php echo e(optional($booking->room)->room_type); ?></p>
                                                <p><strong>Price Per Night:</strong> $<?php echo e(optional($booking->room)->price_per_night); ?></p> <br>

                                                <h5><strong><i class="fas fa-calendar-alt" style="color: #ff8931;"></i> Booking Details</strong></h5>
                                                <p><strong>Check-in Date:</strong> <?php echo e(\Carbon\Carbon::parse($booking->check_in_date)->format('Y-m-d')); ?></p>
                                                <p><strong>Check-out Date:</strong> <?php echo e(\Carbon\Carbon::parse($booking->check_out_date)->format('Y-m-d')); ?></p><br>

                                                <h5><strong><i class="fas fa-clock" style="color: #ff8931;"></i> Time Remaining</strong></h5>
                                                <?php
                                                    $checkInDateTime = \Carbon\Carbon::parse($booking->check_in_date);
                                                    $timeRemaining = $now->diff($checkInDateTime);
                                                ?>

                                                <?php if($timeRemaining->invert): ?>
                                                    <p>Check-in has already occurred.</p>
                                                <?php else: ?>
                                                    <p><?php echo e($timeRemaining->days); ?> days, <?php echo e($timeRemaining->h); ?> hours, and <?php echo e($timeRemaining->i); ?> minutes</p>
                                                <?php endif; ?>

                                                <p><strong>Status:</strong>
                                                    <span class="<?php echo e($booking->status === 'approved' ? 'text-success' : ($booking->status === 'pending' ? 'text-warning' : 'text-danger')); ?>">
                                                        <?php echo e(ucfirst($booking->status)); ?>

                                                    </span>
                                                </p>
                                            </div>
                                            <div class="booking-actions" style="margin-left: auto;">
                                                <?php if($booking->status === 'approved' && $checkInDateTime->isPast()): ?>
                                                    <form action="<?php echo e(route('ratings.show', $booking->id)); ?>" method="GET" style="display:inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <button class="btn btn-primary">Rate Your Visit</button>
                                                    </form>
                                                <?php endif; ?>
                                                
                                            </div>
                                        </div>
                                    </div><br>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/bookings/showBookings.blade.php ENDPATH**/ ?>