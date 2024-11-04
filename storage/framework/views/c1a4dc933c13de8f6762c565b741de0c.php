<?php $__env->startSection('title', 'appointments details'); ?>
<?php $__env->startSection('from', 'profile'); ?>
<?php $__env->startSection('content'); ?>
<br>
<section class="pet_appointment_wrap">
    <div class="container">
        <h2>Appointment Details</h2>

        <?php if($appointments->isEmpty()): ?>
            <p>No appointments found for this pet.</p>
        <?php else: ?>
            <div class="row">
                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                        <div class="card mb-3" style="background-color: rgb(249, 246, 246); background-image: url('<?php echo e(asset('images/service-bg-paw.png')); ?>'); box-shadow: 0px 6px 12px -1px #ddd; border: none; border-radius: 8px;">
                            <div class="card-body" style="padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
                                <div class="appointment-details">
                                    <h5><strong><i class="fas fa-paw" style="color: rgb(255, 139, 51);"></i> Pet Details</strong></h5>
                                    <p><strong>Pet Name:</strong> <?php echo e(optional($appointment->pet)->name); ?></p>
                                    <p><strong>Breed:</strong> <?php echo e(optional($appointment->pet)->breed ?? 'Unknown'); ?></p>

                                    <?php if(isset($appointment->pet->birthday)): ?>
                                        <?php
                                            $birthday = \Carbon\Carbon::parse($appointment->pet->birthday);
                                            $now = \Carbon\Carbon::now();
                                            $ageYears = $birthday->diffInYears($now);
                                            $ageMonths = $birthday->diffInMonths($now) % 12;
                                        ?>

                                        <p><strong>Age:</strong>
                                            <?php if($ageYears > 0): ?>
                                                <?php echo e($ageYears); ?> years
                                            <?php endif; ?>
                                            <?php if($ageMonths > 0): ?>
                                                <?php echo e($ageMonths); ?> months
                                            <?php endif; ?>
                                        </p>
                                    <?php else: ?>
                                        <p><strong>Age:</strong> Unknown</p>
                                    <?php endif; ?>
                                    <br>

                                    <h5><strong><i class="fas fa-briefcase" style="color: #ff8931;"></i> Appointment Service Details</strong></h5>
                                    <p><strong>Service Name:</strong> <?php echo e(optional($appointment->service)->name); ?></p>
                                    <p><strong>Service Description:</strong> <?php echo e(optional($appointment->service)->description); ?></p>
                                    <p><strong>Service Price:</strong> $<?php echo e(optional($appointment->service)->price); ?></p>
                                    <br>

                                    <h5><strong><i class="fas fa-calendar-alt" style="color: #ff8931;"></i> Appointment Details</strong></h5>
                                    <p><strong>Appointment Date:</strong> <?php echo e(\Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d')); ?></p>
                                    <p><strong>Status:</strong><span class=" <?php echo e($appointment->status === 'approved' ? 'text-success' : ($appointment->status === 'pending' ? 'text-warning' : 'text-danger')); ?>"> <?php echo e(ucfirst($appointment->status)); ?> </span></p>

                                    <?php if(isset($appointment->appointment_time)): ?>
                                        <?php
                                            $timeRange = explode(' - ', $appointment->appointment_time);
                                            $startTime = $timeRange[0] ?? 'Unknown';
                                            $endTime = $timeRange[1] ?? 'Unknown';

                                            $appointmentStart = \Carbon\Carbon::parse($appointment->appointment_date . ' ' . $startTime);
                                            $now = \Carbon\Carbon::now();
                                            $timeRemaining = $appointmentStart->diff($now);
                                        ?>

                                        <p><strong>Appointment Time:</strong> <?php echo e($startTime); ?> - <?php echo e($endTime); ?></p>
                                        <br>

                                        <?php if($appointmentStart->isPast()): ?>
                                            <p class="text-danger">This appointment has ended.</p>
                                            <a href="<?php echo e(route('rating.show')); ?>" class="btn btn-primary">Rate Your Visit</a>
                                        <?php else: ?>
                                            <h5><strong><i class="fas fa-clock" style="color: #ff8931;"></i> Time Remaining</strong></h5>
                                            <p><?php echo e($timeRemaining->days); ?> days, <?php echo e($timeRemaining->h); ?> hours, and <?php echo e($timeRemaining->i); ?> minutes</p>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <p><strong>Appointment Time:</strong> Unknown</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

         <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/Appointments/showAppointments.blade.php ENDPATH**/ ?>