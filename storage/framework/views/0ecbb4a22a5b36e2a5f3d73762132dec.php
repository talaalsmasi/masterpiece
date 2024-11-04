<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>

<style>
    body {
        background-image: url('http://localhost:8000/images/bg-paw.png'); /* ضع هنا رابط الصورة المباشر */
        background-color: rgb(249, 246, 246);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>



          <!-- main header end-->



            <!--pet 404 warp start -->
           <div style="margin-left: 10%" >
            <a href="<?php echo e(route('adoption.request')); ?>" class="btn btn-primary">Adoption request</a>
            <a href="<?php echo e(route('user.donations')); ?>" class="btn btn-primary">Your Donations</a>
            <a href="<?php echo e(route('user.orders')); ?>" class="btn btn-primary">Your Order</a>
            <a href="<?php echo e(route('profile.editInfo')); ?>" class="btn btn-primary">Edit Profile</a>
            <a href="<?php echo e(route('user.events')); ?>" class="btn btn-primary">My Registered Events </a>
            <a href="<?php echo e(route('profile.showInfo')); ?>" class="btn btn-primary">Show Information</a><br><br><br>
           </div>


            <div class="container">

                <div class="mian_heading text-center"><h2>Welcome, <?php echo e($user->name); ?> <br>Your Pets</h2></div>

                <?php if(session('success')): ?>
                    <div style="color: green;">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <ul style="list-style: none; padding: 0;">
                    <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 8px; display: flex; align-items: center;">
                            <div style="margin-right: 20px;">
                                <!-- عرض صورة الحيوان -->
                                <?php if($pet->image): ?>
                                    <img src="<?php echo e(asset($pet->image)); ?>" alt="<?php echo e($pet->name); ?>" style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%;">
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/70" alt="No Image" style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%;">
                                <?php endif; ?>
                            </div>
                            <div style="flex-grow: 1;">
                                <!-- معلومات الحيوان -->
                                <h5 style="margin: 0; font-size: 18px; color: #333;text-transform: capitalize"><?php echo e($pet->name); ?></h5>
                                <p style="margin: 5px 0; color: #777;">Breed: <?php echo e($pet->breed ?? 'Unknown Breed'); ?></p>
                                <p style="margin: 5px 0; color: #777;">Birthday: <?php echo e($pet->birthday ?? 'No Birthday Info'); ?></p>
                                <p style="margin: 5px 0; color: #777;">Animal type: <?php echo e($pet->animalType->type_name?? 'No Type Info'); ?></p>
                            </div>

                            
                            <div>
                                <!-- زر تعديل الحيوان -->
                                <a href="<?php echo e(route('profile.edit-pet-form', $pet->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="padding: 10px 20px; font-size: 14px;">Edit</a>


                                <!-- زر الموعد إذا كان للحيوان موعد -->
                                <?php if($pet->appointments->count() > 0): ?>
                                    <a href="<?php echo e(route('appointment.show', $pet->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="padding: 10px 20px; font-size: 14px; margin-left: 10px;">Appointment</a>
                                <?php endif; ?>

                                <?php if($pet->broomings->count() > 0): ?>
                                <a href="<?php echo e(route('brooming.show', $pet->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="padding: 10px 20px; font-size: 14px; margin-left: 10px;">Grooming Appointment</a>
                                <?php endif; ?>


                                <!-- زر الحجز إذا كان للحيوان حجز -->
                                <?php if($pet->bookings->count() > 0): ?>
                                <a href="<?php echo e(route('bookings.show', $pet->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="padding: 10px 20px; font-size: 14px; margin-left: 10px;">Booking</a>
                                <?php endif; ?>
                                <form action="<?php echo e(route('profile.destroy-pet', $pet->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="main_button btn2 bdr-clr hover-affect" onclick="return confirm('Are you sure you want to delete this pet?')"style="padding: 10px 20px; font-size: 14px; margin-left: 10px;">Delete</button>
                                </form>


                            </div>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <a href="<?php echo e(route('profile.add-pet-form')); ?>" class="main_button btn2 bdr-clr hover-affect">Add New Pet</a>
            </div><br><br>


           <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/profile/profile.blade.php ENDPATH**/ ?>