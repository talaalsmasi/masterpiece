<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'edit info'); ?>
<?php $__env->startSection('content'); ?>
            <!--sab banner wraper end-->

            <!--pet 404 warp start -->

            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Edit Profile: <?php echo e($user->name); ?></h2><br>

                    <?php if($errors->any()): ?>
                        <div style="color: red;">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('profile.update', $user->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-user" style="color: #ff8931;"></i> Name:</h6>
                                    <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" required>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-envelope" style="color: #ff8931;"></i> Email:</h6>
                                    <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" required>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-phone" style="color: #ff8931;"></i> Phone:</h6>
                                    <input type="text" name="phone" class="form-control" value="<?php echo e($user->phone); ?>">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-lock" style="color: #ff8931;"></i> Password:</h6>
                                    <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-image" style="color: #ff8931;"></i> Profile Image:</h6>

                                    <!-- عرض الصورة الحالية إذا كانت موجودة -->
                                    

                                    <!-- حقل تحميل صورة جديدة -->
                                    <input type="file" name="image" class="form-control">
                                    <small style="color: black">Choose a new image to update (optional).</small>
                                </div>

                                <div class="pet_appointment_colum" >
                                    <br>
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Update Profile</button>
                                    <a style="margin-left: 3vh" href="<?php echo e(route('profile')); ?>" class="main_button btn2 bdr-clr hover-affect">Back to Profile</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>


            <!-- pet team warp end -->

            <!--pet company wrap start-->
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/Profile/editInfo.blade.php ENDPATH**/ ?>