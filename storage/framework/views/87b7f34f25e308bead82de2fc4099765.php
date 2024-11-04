<?php $__env->startSection('from', 'Events'); ?>
<?php $__env->startSection('title', 'Event details'); ?>
<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<section class="child_service_wrap blog-full blog_post_detail">
    <div class="container">
        <div class="child_service_row">
            <div class="pet_blog_full_detail">
                <!-- Event details section -->
                <div class="child_service_column">
                    <figure class="image-layer-affect">
                        <img style="height: 400px; width:100%;" src="<?php echo e(asset($event->image)); ?>" alt="">
                    </figure>
                    <div class="child_service_text">
                        <img class="shap_fig_position" src="<?php echo e(asset('images/shap-fig01.png')); ?>" alt="">
                        <h5 style="margin-right:50%"><?php echo e($event->title); ?></h5><br>
                        <p style="margin-right: 30%"><?php echo e($event->description); ?></p>

                        <!-- Event information with icons -->
                        <div class="blog_post_info">
                            <ul class="child_service_info">
                                <!-- Date -->
                                <li><a href="#"><i class="fa fa-calendar"></i>
                                    <?php echo e($event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d F, Y') : 'No date available'); ?>

                                </a></li>

                                <!-- Time -->
                                <li><a href="#"><i class="fa fa-clock"></i>
                                    <?php echo e($event->event_time ? \Carbon\Carbon::parse($event->event_time)->format('h:i A') : 'No time available'); ?>

                                </a></li>

                                <!-- Capacity -->
                                <li><a href="#"><i class="fa fa-users"></i> Capacity: <?php echo e($event->capacity); ?></a></li>

                                <!-- Registered Count -->
                                <li><a href="#"><i class="fa fa-user-check"></i> Registered: <?php echo e($event->registered_count); ?></a></li>
                            </ul>

                            <!-- Registration button -->
                            <form action="<?php echo e(route('events.register', $event->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php
                                    $eventDateTime = \Carbon\Carbon::parse($event->event_date . ' ' . $event->event_time);
                                    $isPastEvent = now()->greaterThanOrEqualTo($eventDateTime);
                                ?>

                                <button type="submit"
                                        class="main_button btn2 bdr-clr hover-affect"
                                        <?php if($event->registered_count >= $event->capacity || $isPastEvent): ?> disabled <?php endif; ?>>
                                    <?php if($isPastEvent): ?>
                                        Event Finished
                                    <?php elseif($event->registered_count >= $event->capacity): ?>
                                        Full
                                    <?php else: ?>
                                        I want to come
                                    <?php endif; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/events/eventdetails.blade.php ENDPATH**/ ?>