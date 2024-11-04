<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'create grooming appointment'); ?>
<?php $__env->startSection('content'); ?>
            <section class="pet_appointment_wrap">

                <div class="container">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?> <br>
                   <h4 class="appointment-main-title">Make An Grooming Appointment</h4>
                   <form action="<?php echo e(route('brooming.payment')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="pet_appointment_row">
                        <div class="appiontment_list">
                            <div class="pet_appointment_colum">
                                <h6>Your pet</h6>
                                <div class="">
                                    <select class="small" name="pet_id" id="pet">
                                        <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pet->id); ?>"><?php echo e($pet->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Select a service</h6>
                                <div class="">
                                    <select class="small" name="service_id" id="service_id">
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?> - $<?php echo e($service->price); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum full-width">
                                <h6>I am available on</h6>
                                <div class="">
                                    <input class="form-control" id="demo" placeholder="2023-06-20" type="date" name="appointment_date" style="width: 99%">
                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Time</h6>
                                <div class="">
                                    <select class="small" name="appointment_time">
                                        <option value="10:00 AM - 10:30 AM">10:00 AM - 10:30 AM</option>
                                        <option value="10:30 AM - 11:00 AM">10:30 AM - 11:00 AM</option>
                                        <option value="11:00 AM - 11:30 AM">11:00 AM - 11:30 AM</option>
                                        <option value="11:30 AM - 12:00 PM">11:30 AM - 12:00 PM</option>
                                        <option value="12:00 PM - 12:30 PM">12:00 PM - 12:30 PM</option>
                                        <option value="12:30 PM - 01:00 PM">12:30 PM - 01:00 PM</option>
                                        <option value="01:30 PM - 02:00 PM">01:30 PM - 02:00 PM</option>
                                        <option value="02:00 PM - 02:30 PM">02:00 PM - 02:30 PM</option>
                                        <option value="02:30 PM - 03:00 PM">02:30 PM - 03:00 PM</option>
                                        <option value="03:00 PM - 03:30 PM">03:00 PM - 03:30 PM</option>
                                        <option value="03:30 PM - 04:00 PM">03:30 PM - 04:00 PM</option>
                                        <option value="04:00 PM - 04:30 PM">04:00 PM - 04:30 PM</option>
                                        <option value="04:30 PM - 05:00 PM">04:30 PM - 05:00 PM</option>
                                        <option value="05:00 PM - 05:30 PM">05:00 PM - 05:30 PM</option>
                                        <option value="05:30 PM - 06:00 PM">05:30 PM - 06:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum" style="visibility: hidden">
                                <h6>Doctor</h6>
                                <div class="">
                                    <select class="small" name="doctor_id" id="doctor">
                                        
                                    </select>
                                </div><br>
                            </div>
                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">process to payment</button>
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

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/grooming/createBrooming.blade.php ENDPATH**/ ?>