<?php $__env->startSection('from', 'pets for adoptions'); ?>
<?php $__env->startSection('title', 'adoption request'); ?>
<?php $__env->startSection('content'); ?>

            <section class="pet_appointment_wrap">

                <div class="container">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?> <br>
                   <h4 class="appointment-main-title">Adoption Request <?php echo e($pet->name); ?></h4>
                   <form action="<?php echo e(route('adopt.submit', ['id' => $pet->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="pet_appointment_row">
                        <div class="appiontment_list">
                            <div class="pet_appointment_colum">
                                <h6>Why do you want to adopt <?php echo e($pet->name); ?>?</h6>
                                <div class="">
                                    <textarea name="reason" id="reason" class="form-control" required></textarea>

                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Can you provide food for <?php echo e($pet->name); ?>?</h6>
                                <div class="">
                                    <select name="can_feed" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum ">
                                <h6>Can you afford medical treatment for <?php echo e($pet->name); ?>?</h6>
                                <div class="">
                                    <select name="can_treat" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Do you have other pets?</h6>
                                <div class="">
                                    <select name="has_other_pets" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div><br>
                            </div><br>

                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">Adoption Request</button>
                            </div>
                        </div>
                    </div>
                </form>


                        </div>

                    </div>
                  </div>
                </div>
            </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/adoptions/adoptionRequest.blade.php ENDPATH**/ ?>