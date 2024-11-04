<?php $__env->startSection('title', 'appointment payment'); ?>
<?php $__env->startSection('from', 'create appointment'); ?>
<?php $__env->startSection('content'); ?>

            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Confirm Your Appointment</h4>
                    <!-- First Form: For confirming the appointment -->
                    <form action="<?php echo e(route('appointment.payment.process')); ?>" method="POST">
                        <?php echo csrf_field(); ?> <!-- Always remember to include CSRF for form submission -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Pet:</h6>
                                    <div class="small">
                                        <p><?php echo e($pet->name); ?></p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Service:</h6>
                                    <div class="">
                                        <p><?php echo e($service->name); ?> (<?php echo e($service->price); ?> USD)</p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Doctor:</h6>
                                    <div class="">
                                        <p><?php echo e($doctor->user->name); ?></p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Date:</h6>
                                    <div class="">
                                        <p><?php echo e($appointmentData['appointment_date']); ?></p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Time:</h6>
                                    <div class="">
                                        <p><?php echo e($appointmentData['appointment_time']); ?></p>
                                    </div><br>
                                    <div><p><b>Note:</b> You will pay half price of <strong>$<?php echo e(number_format($price / 2, 2)); ?></strong>, and you can complete it when the booking is done.</p>
                                    </div>
                                </div>
                                <div class="pet_appointment_colum">
                                    <h6>Price:</h6>
                                    <div class="">
                                        <p><?php echo e($price); ?></p>
                                    </div>
                                </div>
                                <!-- Hidden Complete Payment button in the first form -->
                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit" style="visibility: hidden">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the first form here -->
                </div>
            </div><br><br><br>

            <!-- Second Section: Payment Information -->
            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Payment Information</h4>
                    <!-- Second Form: For payment processing -->
                    <form action="<?php echo e(route('appointment.payment.process')); ?>" method="POST">
                        <?php echo csrf_field(); ?> <!-- CSRF token for security -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Card Number</h6>
                                    <div class="small">
                                        <input type="text" id="card_number" name="card_number" placeholder="Enter your card number">
                                        <!-- Display error message for card_number -->
                                        <?php $__errorArgs = ['card_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="error"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Cardholder Name</h6>
                                    <div class="">
                                        <input type="text" name="cardholder_name" id="cardholder_name" placeholder="Enter your name" required>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Expiry Date</h6>
                                    <div class="">
                                        <input type="text" name="expiry_date" id="expiry_date" required pattern="\d{2}/\d{2}" title="Expiry date must be in the format MM/YY" placeholder="MM/YY">
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>CVV</h6>
                                    <div class="">
                                        <input type="text" name="cvv" id="cvv" required minlength="3" maxlength="3" pattern="\d{3}" title="CVV must be 3 digits" placeholder="CVV">
                                    </div><br>
                                </div>
                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the second form here -->
                </div>
            </div><br><br><br><br>

           <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/appointments/appointmentPayment.blade.php ENDPATH**/ ?>