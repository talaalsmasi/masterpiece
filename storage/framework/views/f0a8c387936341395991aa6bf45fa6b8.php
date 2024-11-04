<?php $__env->startSection('from', 'Profile'); ?>
<?php $__env->startSection('title', 'your donations'); ?>
<?php $__env->startSection('content'); ?>

            <section class="pet_team_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">  Your Donations</h4><br>

                    <?php if($userDonations->isEmpty()): ?>
                        <p>You haven't made any donations yet.</p>
                    <?php else: ?>
                        <div class="pet_team_row">
                            <?php $__currentLoopData = $userDonations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="pet_team_column">
                                    <figure class="image-layer-affect">
                                        <img style="height:600px;width:400px " src="<?php echo e(asset( $donation->rescueAnimal->pet->image)); ?>" alt="image"> <!-- Update this path if you have a specific image for each donation -->

                                        <div class="pet_team_text" style="color: black">
                                            <h5><?php echo e($donation->rescueAnimal->pet->name); ?></h5>
                                            <span>Donation Amount: $<?php echo e($donation->amount); ?></span>
                                            <span>Date of Donation: <?php echo e($donation->created_at->format('Y-m-d')); ?></span><br>
                                            <div>
                                                <a href="<?php echo e(route('rescueAnimals.show', $donation->rescue_animal_id)); ?>" class="main_button btn2 bdr-clr hover-affect" style="margin-left: 18%">View Animal</a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <a href="<?php echo e(route('profile')); ?>" class="main_button btn2 bdr-clr hover-affect">Back to Profile</a><br><br>
                </div>
            </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/rescueAnimals/userDonations.blade.php ENDPATH**/ ?>