<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'show grooming appointments'); ?>
<?php $__env->startSection('content'); ?>
<section class="pet_appointment_wrap">
            <div class="container">
                <h2>Grooming Appointment Details</h2>

                <?php if($broomings->isEmpty()): ?>
                    <p>No grooming appointments found for this pet.</p>
                <?php else: ?>
                    <div class="row">
                        <?php $__currentLoopData = $broomings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brooming): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="card mb-3" style="background-color: #f6f5f5; background-image: url('<?php echo e(asset('images/service-bg-paw.png')); ?>'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px;">
                                    <div class="card-body" style="padding: 20px;">
                                        <h5><strong><i class="fas fa-paw" style="color: #ff8931;"></i> Pet Details</strong></h5>
                                        <p><strong>Pet Name:</strong> <?php echo e(optional($brooming->pet)->name); ?></p>
                                        <p><strong>Breed:</strong> <?php echo e(optional($brooming->pet)->breed ?? 'Unknown'); ?></p>

                                        <?php
                                            $birthday = \Carbon\Carbon::parse($brooming->pet->birthday);
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

                                        <h5><strong><i class="fas fa-briefcase" style="color: #ff8931;"></i> Grooming Service Details</strong></h5>
                                        <p><strong>Service Name:</strong> <?php echo e(optional($brooming->service)->name); ?></p>
                                        <p><strong>Service Description:</strong> <?php echo e(optional($brooming->service)->description); ?></p>
                                        <p><strong>Service Price:</strong> $<?php echo e(optional($brooming->service)->price); ?></p>

                                        <h5><strong><i class="fas fa-calendar-alt" style="color: #ff8931;"></i> Appointment Details</strong></h5>
                                        <p><strong>Appointment Date:</strong> <?php echo e(\Carbon\Carbon::parse($brooming->appointment_date)->format('Y-m-d')); ?></p>

                                        <?php
                                            $timeRange = explode(' - ', $brooming->appointment_time);
                                            $startTime = $timeRange[0]; // وقت البداية
                                            $endTime = $timeRange[1]; // وقت النهاية

                                            $appointmentStart = \Carbon\Carbon::parse($brooming->appointment_date . ' ' . $startTime);
                                            $now = \Carbon\Carbon::now();
                                            $timeRemaining = $appointmentStart->diff($now);
                                        ?>

                                        <p><strong>Appointment Time:</strong> <?php echo e($startTime); ?> - <?php echo e($endTime); ?></p>

                                        <h5><strong><i class="fas fa-clock" style="color: #ff8931;"></i> Time Remaining</strong></h5>
                                        <p><?php echo e($timeRemaining->days); ?> days, <?php echo e($timeRemaining->h); ?> hours, and <?php echo e($timeRemaining->i); ?> minutes</p>

                                        <p><strong>Status:</strong>
                                            <span class="<?php echo e($brooming->status === 'approved' ? 'text-success' : ($brooming->status === 'pending' ? 'text-warning' : 'text-danger')); ?>">
                                                <?php echo e(ucfirst($brooming->status)); ?>

                                            </span>
                                        </p>

                                        <?php if($brooming->status === 'approved' && $appointmentStart->isPast()): ?>
                                            <form action="<?php echo e(route('appointments.rate', $brooming->id)); ?>" method="GET">
                                                <button class="btn btn-primary">Rate Your Visit</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div><br>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/grooming/showBrooming.blade.php ENDPATH**/ ?>