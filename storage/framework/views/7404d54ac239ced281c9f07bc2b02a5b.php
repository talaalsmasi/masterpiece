<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'Events'); ?>
<?php $__env->startSection('content'); ?>

<section class="child_service_wrap blog-post">
    <div class="container">
        <div class="mian_heading text-center"><h2>Upcoming Events</h2></div>
        <div class="child_service_row">
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="child_service_column">
                    <figure class="image-layer-affect" style="position: relative;">
                        <!-- تحقق مما إذا كان الحدث مكتمل العدد أو منتهي -->
                        <?php
                            $isFinished = \Carbon\Carbon::now()->greaterThan(\Carbon\Carbon::parse($event->event_date . ' ' . $event->event_time));
                        ?>

                        <!-- تطبيق الشفافية والنصوص بناءً على حالة الحدث -->
                        <img style="height: 280px; width:350px;
                            <?php if($event->registered_count >= $event->capacity || $isFinished): ?> opacity: 0.5; <?php endif; ?>"
                             src="<?php echo e(asset($event->image)); ?>" alt="<?php echo e($event->title); ?>">

                        <!-- إضافة نص "العدد مكتمل" أو "الحدث منتهي" بناءً على حالة الحدث -->
                        <?php if($event->registered_count >= $event->capacity): ?>
                            <div style="
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: white;
                                font-size: 1.5rem;
                                background-color: rgba(0, 0, 0, 0.5);">
                                Full Capacity
                            </div>
                        <?php elseif($isFinished): ?>
                            <div style="
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                color: white;
                                font-size: 1.5rem;
                                background-color: rgba(0, 0, 0, 0.5);">
                                The Event is Finished
                            </div>
                        <?php endif; ?>
                    </figure>

                    <div class="child_service_text">
                        <h5>
                            <a href="<?php echo e(route('events.details', $event->id)); ?>" style="text-decoration: none; color: inherit;">
                                <?php echo e($event->title); ?>

                            </a>
                        </h5>
                        <ul class="child_service_info">
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i>
                                    <?php echo e($event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d F, Y') : 'No date available'); ?>

                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-clock"></i>
                                    <?php echo e($event->event_time ? \Carbon\Carbon::parse($event->event_time)->format('h:i A') : 'No time available'); ?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/events/showevents.blade.php ENDPATH**/ ?>