<?php $__env->startSection('from', $rescueAnimal->pet->name .' Details'); ?>
<?php $__env->startSection('title', 'Donate'); ?>
<?php $__env->startSection('content'); ?>
            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Donate to <?php echo e($rescueAnimal->pet->name); ?></h4>
                    <p>Current Donation: <?php echo e($rescueAnimal->current_donated_amount); ?> / <?php echo e($rescueAnimal->total_required_amount); ?></p>

                    <!-- Donation Form for payment processing -->
                    <form action="<?php echo e(route('rescueAnimals.processDonation', $rescueAnimal->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?> <!-- CSRF token for security -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Donation Amount</h6>
                                    <input type="number" name="donation_amount" id="donation_amount"
                                           min="1"
                                           max="<?php echo e($rescueAnimal->total_required_amount - $rescueAnimal->current_donated_amount); ?>"
                                           required style="border-radius: 1vh">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Card Number</h6>
                                    <input type="text" id="card_number" name="card_number"
                                           placeholder="Enter your card number" required>
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

                                <div class="pet_appointment_colum">
                                    <h6>Cardholder Name</h6>
                                    <input type="text" name="cardholder_name" id="cardholder_name"
                                           placeholder="Enter your name" required>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Expiry Date</h6>
                                    <input type="text" name="expiry_date" id="expiry_date"
                                           required pattern="\d{2}/\d{2}"
                                           title="Expiry date must be in the format MM/YY"
                                           placeholder="MM/YY">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>CVV</h6>
                                    <input type="text" name="cvv" id="cvv" required minlength="3"
                                           maxlength="3" pattern="\d{3}"
                                           title="CVV must be 3 digits" placeholder="CVV">
                                </div>
                                <div class="pet_appointment_colum" style="visibility: hidden">
                                    <h6>CVV</h6>
                                    
                                </div>

                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the donation form here -->
                </div>
            </div><br><br><br><br>

     <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/rescueAnimals/donate.blade.php ENDPATH**/ ?>