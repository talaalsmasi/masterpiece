<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'add a pet'); ?>
<?php $__env->startSection('content'); ?>

            <!--pet 404 warp start -->

            <section class="pet_appointment_wrap">
                <div class="container">
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <br>
                    <h4 class="appointment-main-title">Add a Pet</h4>
                    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
                    <form action="<?php echo e(route('profile.add-pet')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-tag" style="color: #ff8931;"></i> Pet Name:</h6>
                                    <div class="">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-tree" style="color: #ff8931;"></i> Breed:</h6>
                                    <div class="">
                                        <input type="text" name="breed" class="form-control">
                                    </div>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-venus" style="color: #ff8931;"></i>
                                        <i class="fas fa-mars" style="color: #ff8931;"></i> Gender:</h6>
                                    <div class="">
                                        <select name="gender" class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-birthday-cake" style="color: #ff8931;"></i> Birthday:</h6>
                                    <div class="">
                                        <input type="date" name="birthday" class="form-control">
                                    </div>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-paw" style="color: #ff8931;"></i> Animal Type:</h6>
                                    <select name="animal_type_id" class="form-control" required>
                                        <?php $__currentLoopData = $animalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->id); ?>"><?php echo e($type->type_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-image" style="color: #ff8931;"></i> Pet Image:</h6>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Add Pet</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- pet team warp end -->

          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/profile/add-pet.blade.php ENDPATH**/ ?>