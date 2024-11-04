<?php $__env->startSection('from', 'profile'); ?>
<?php $__env->startSection('title', 'your adoption request'); ?>
<?php $__env->startSection('content'); ?>
            <section class="pet_team_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Your Adoption Request</h4><br>
                    <div class="pet_team_row">

                        <?php $__currentLoopData = $adoptionRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="pet_team_column">
                                <figure class="image-layer-affect">
                                    <img src="<?php echo e(asset($request->pet->image)); ?>" alt="image">

                                    <div style="color: black" class="pet_team_text">
                                        <h5><?php echo e($request->pet->name); ?></h5>
                                        <span>Breed: <?php echo e($request->pet->breed ?? 'Unknown'); ?></span>
                                        <span>gender: <?php echo e($request->pet->gender ?? 'Unknown'); ?></span>

                                        <p>Status:
                                            <?php if($request->status == 'pending'): ?>
                                                <span class="badge bg-warning">Pending</span>
                                            <?php elseif($request->status == 'approved'): ?>
                                                <span class="badge bg-success">Approved</span>
                                            <?php elseif($request->status == 'rejected'): ?>
                                                <span class="badge bg-danger">Rejected</span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Unknown</span>
                                            <?php endif; ?>
                                        </p>


                                        <form action="<?php echo e(route('adoptions.cancel', $request->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" style="margin-left: 12%" class="main_button hover-affect">Cancel the request</button>
                                        </form>
                                    </div>
                                </figure>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <a href="<?php echo e(route('profile')); ?>" class="main_button btn2 bdr-clr hover-affect" >Back to Profile</a><br><br>
                </div>

            </section>
         <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/adoptions/showAdoptionRequest.blade.php ENDPATH**/ ?>