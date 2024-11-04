<?php $__env->startSection('from', 'Events'); ?>
<?php $__env->startSection('title', 'Event details'); ?>
<?php $__env->startSection('content'); ?>

<section class="pet_appointment_wrap">
    <div class="container">
        <h2>Upcoming Events</h2>

        <?php if($events->isEmpty()): ?>
            <p>No events available at the moment.</p>
        <?php else: ?>
            <div class="row">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                        <div class="card mb-3" style="background-color: #f6f5f5; background-image: url('<?php echo e(asset('images/service-bg-paw.png')); ?>'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px; position: relative;">

                            <!-- عرض علامة "Event Full" إذا كانت السعة مكتملة -->
                            <?php if($event->registered_count >= $event->capacity): ?>
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5rem;">
                                    Event Full
                                </div>
                            <?php endif; ?>

                            <div class="card-body" style="padding: 20px; display: flex; justify-content: space-between; align-items: flex-start; opacity: <?php echo e($event->registered_count >= $event->capacity ? '0.7' : '1'); ?>">
                                <div class="event-details">
                                    <h5><strong><i class="fas fa-calendar-alt" style="color: #ff8931;"></i> Event Details</strong></h5>
                                    <p><strong>Title:</strong> <a href="<?php echo e(route('events.details', $event->id)); ?>" style="text-decoration: none; color: inherit;"><?php echo e($event->title); ?></a></p>
                                    <p><strong>Description:</strong> <?php echo e($event->description); ?></p>
                                    <p><strong>Date:</strong> <?php echo e(\Carbon\Carbon::parse($event->event_date)->format('d F, Y')); ?></p>
                                    <p><strong>Time:</strong> <?php echo e(\Carbon\Carbon::parse($event->event_time)->format('h:i A')); ?></p>
                                    <p><strong>Capacity:</strong> <?php echo e($event->capacity); ?></p>
                                    <p><strong>Registered:</strong> <?php echo e($event->registered_count); ?></p>

                                    <!-- حساب الوقت المتبقي -->
                                    <?php
                                        $eventDateTime = \Carbon\Carbon::parse($event->event_date . ' ' . $event->event_time);
                                        $now = \Carbon\Carbon::now();
                                        $daysRemaining = $now->diffInDays($eventDateTime);
                                        $hoursRemaining = $now->copy()->addDays($daysRemaining)->diffInHours($eventDateTime);
                                        $minutesRemaining = $now->copy()->addDays($daysRemaining)->addHours($hoursRemaining)->diffInMinutes($eventDateTime);
                                    ?>
                                    <p><strong>Time Remaining:</strong> <?php echo e($daysRemaining); ?> days, <?php echo e($hoursRemaining); ?> hours, and <?php echo e($minutesRemaining); ?> minutes</p>
                                </div>

                                <div class="event-actions" style="margin-left: auto;">
                                    <?php
                                        $isRegistered = DB::table('event_registrations')
                                            ->where('event_id', $event->id)
                                            ->where('user_id', auth()->id())
                                            ->exists();
                                    ?>

                                    <?php if($isRegistered): ?>
                                        <form action="<?php echo e(route('events.unregister', $event->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger">Cancel Attendance</button>
                                        </form>
                                    <?php else: ?>
                                        <?php if($event->registered_count < $event->capacity): ?>
                                            <form action="<?php echo e(route('events.register', $event->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-primary">Register</button>
                                            </form>
                                        <?php endif; ?>
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

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/events/my_registered_events.blade.php ENDPATH**/ ?>