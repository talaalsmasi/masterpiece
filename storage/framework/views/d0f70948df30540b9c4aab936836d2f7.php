<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'rescue Pets'); ?>
<?php $__env->startSection('content'); ?>
            <section class="pet_team_wrap">
                <div class="mian_heading text-center"><h2>Rescuse pets</h2></div>

                <div class="container">
                    <div class="pet_team_row">

                        <?php $__currentLoopData = $rescueAnimals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rescueAnimal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="pet_team_column" >
                                <figure class="image-layer-affect">
                                    <img style="height: 600px;width:400px" src="<?php echo e(asset($rescueAnimal->pet->image)); ?>" alt="image">

                                    <div class="pet_team_text" style="color: black">
                                        <h5><?php echo e($rescueAnimal->pet->name); ?></h5>
                                        <span>Current Donation: <?php echo e($rescueAnimal->current_donated_amount); ?> / <?php echo e($rescueAnimal->total_required_amount); ?></span>


                                       <br>
                                        <div>
                                            <a href="<?php echo e(route('rescueAnimals.show', $rescueAnimal->id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="margin-left: 17%">View Details</a>
                                        </div>


                                    </div>
                                </figure>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/rescueAnimals/rescueAnimals.blade.php ENDPATH**/ ?>