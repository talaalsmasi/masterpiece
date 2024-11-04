<?php $__env->startSection('from', 'Rescue Pets'); ?>
<?php $__env->startSection('title', $rescueAnimal->pet->name .' details'); ?>
<?php $__env->startSection('content'); ?>
            <section class="child_service_wrap blog-full">
                <div class="container">
                  <div class="child_service_row">
                            <div class="child_service_column">
                                <figure class="image-layer-affect">
                                    <img style="height: 550px;width:565px" src="<?php echo e(asset($rescueAnimal->pet->image)); ?>" alt="">
                                </figure>
                                <div class="child_service_text">

                                    <div>
                                        <div><h5><?php echo e($rescueAnimal->pet->name); ?>'s Details </h5></div>
                                        <p class="card-text"><b>Breed:</b> <?php echo e($rescueAnimal->pet->breed ?? 'Unknown'); ?></p>
                                        <p class="card-text"><b>Age:</b>
                                            <?php
                                                $birthdate = \Carbon\Carbon::parse($rescueAnimal->pet->birthday);
                                                $now = \Carbon\Carbon::now();
                                                $ageInYears = $birthdate->diffInYears($now);
                                                $remainingMonths = $birthdate->addYears($ageInYears)->diffInMonths($now);
                                            ?>
                                            <?php echo e($ageInYears); ?> years and <?php echo e($remainingMonths); ?> months old
                                        </p>
                                        <p class="card-text"><b>Description:</b> <?php echo e($rescueAnimal->description ?? 'No description available.'); ?></p>

                                        <p class="card-text"><b>Current Donation:</b> <?php echo e($rescueAnimal->current_donated_amount); ?> / <?php echo e($rescueAnimal->total_required_amount); ?></p>
                                        <a href="<?php echo e(route('rescueAnimals.donate', $rescueAnimal->id)); ?>" class="main_button btn2 bdr-clr hover-affect">Donate Now</a><br>
                                    </div>

                                </div>
                            </div>
                  </div>
                </div>
              </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/rescueAnimals/showDetails.blade.php ENDPATH**/ ?>