<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'Show info'); ?>
<?php $__env->startSection('content'); ?>

            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Your Profile: <?php echo e($user->name); ?></h2><br>

                    <div class="pet_appointment_row">
                        <div class="appiontment_list">
                            <div class="pet_appointment_colum">
                                <h6><i class="fas fa-user" style="color: #ff8931;"></i> Name:</h6>
                                <p><?php echo e($user->name); ?></p>
                            </div>

                            <div class="pet_appointment_colum">
                                <h6><i class="fas fa-envelope" style="color: #ff8931;"></i> Email:</h6>
                                <p><?php echo e($user->email); ?></p>
                            </div>

                            <div class="pet_appointment_colum">
                                <h6><i class="fas fa-phone" style="color: #ff8931;"></i> Phone:</h6>
                                <p><?php echo e($user->phone ?? 'No phone number provided'); ?></p>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6><i class="fa-solid fa-image"style="color: #ff8931;"></i> Image:</h6>

                                <?php if(isset($user->image) && $user->image != ''): ?>
                                    <img style="height: 70px;width:70px;border-radius:50%" src="<?php echo e(asset($user->image)); ?>" alt="User Image" style="width: 150px; height: auto;">
                                <?php else: ?>
                                    <p>No image provided</p>
                                <?php endif; ?>
                            </div>


                            <div class="pet_appointment_colum">
                                <a  href="<?php echo e(route('profile.editInfo')); ?>" class="main_button btn2 bdr-clr hover-affect"
                                >Edit Informations</a>
                                <a  href="<?php echo e(route('profile')); ?>" class="main_button btn2 bdr-clr hover-affect"
                                >back to profile</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/profile/showInfo.blade.php ENDPATH**/ ?>