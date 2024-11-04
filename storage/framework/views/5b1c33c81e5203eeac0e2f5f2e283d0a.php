<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'edit a pet'); ?>
<?php $__env->startSection('content'); ?>

            <!--pet 404 warp start -->
            <section class="pet_appointment_wrap">
                <div class="container">
                    <h2>Edit Pet: <?php echo e($pet->name); ?></h2>

                    <?php if($errors->any()): ?>
                        <div style="color: red;">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('profile.update-pet', $pet->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-tag" style="color: #ff8931;"></i> Pet Name:</h6>
                                    <input type="text" name="name" class="form-control" value="<?php echo e($pet->name); ?>" required>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-tree" style="color: #ff8931;"></i> Breed:</h6>
                                    <input type="text" name="breed" class="form-control" value="<?php echo e($pet->breed); ?>">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-birthday-cake" style="color: #ff8931;"></i> Birthday:</h6>
                                    <input type="date" name="birthday" class="form-control" value="<?php echo e($pet->birthday); ?>">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-paw" style="color: #ff8931;"></i> Animal Type:</h6>
                                    <select name="animal_type_id" class="form-control" required>
                                        <?php $__currentLoopData = $animalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->id); ?>" <?php echo e($pet->animal_type_id == $type->id ? 'selected' : ''); ?>>
                                                <?php echo e($type->type_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6><i class="fas fa-image" style="color: #ff8931;"></i> Pet Image:</h6>
                                    <input type="file" name="image" class="form-control">
                                    <?php if($pet->image): ?>
                                        <img src="<?php echo e(asset('storage/' . $pet->image)); ?>" alt="<?php echo e($pet->name); ?>" style="width: 50px; height: 50px;">
                                    <?php endif; ?>
                                </div>
                                <div class="pet_appointment_colum" style="visibility: hidden">
                                    <h6><i class="fas fa-paw" style="color: #ff8931;"></i> Animal Type:</h6>
                                    <select name="animal_type_id" class="form-control" required>
                                        <?php $__currentLoopData = $animalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->id); ?>" <?php echo e($pet->animal_type_id == $type->id ? 'selected' : ''); ?>>
                                                <?php echo e($type->type_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select><br>
                                </div>

                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Update Pet</button>
                                    <a href="<?php echo e(route('profile')); ?>" class="main_button btn2 bdr-clr hover-affect">Back to Profile</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- pet team warp end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/profile/edit-pet.blade.php ENDPATH**/ ?>