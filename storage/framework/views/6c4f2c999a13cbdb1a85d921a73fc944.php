<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'create appointment'); ?>
<?php $__env->startSection('content'); ?>


<section class="pet_appointment_wrap">
    <div class="container">
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <br>
        <h4 class="appointment-main-title">Make an Appointment</h4>
        <form action="<?php echo e(route('appointment.payment')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="pet_appointment_row">
                <div class="appiontment_list">
                    <div class="pet_appointment_colum">
                        <h6>Your pet</h6>
                        <div>
                            <select class="small" name="pet_id" id="pet">
                                <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pet->id); ?>"><?php echo e($pet->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="pet_appointment_colum">
                        <h6>Select a service</h6>
                        <div>
                            <select class="small" name="service_id" id="service">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?> (<?php echo e($service->price); ?> USD)</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="pet_appointment_colum full-width">
                        <h6>I am available on</h6>
                        <div>
                            <input class="form-control" id="appointment_date" placeholder="2023-06-20" type="date" name="appointment_date" onchange="fetchAvailableTimes()" style="width: 99%">
                        </div>
                    </div>

                    <div class="pet_appointment_colum">
                        <h6>Time</h6>
                        <div>
                            <select class="small" name="appointment_time" id="appointment_time">
                                <!-- Options will be dynamically loaded here -->
                            </select>
                        </div>
                    </div>

                    <div class="pet_appointment_colum">
                        <h6>Doctor</h6>
                        <div>
                            <select class="small" name="doctor_id" id="doctor" onchange="fetchAvailableTimes()">
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <br>
                    </div>

                    <div class="pet_appointment_colum">
                        <button class="main_button btn2 bdr-clr hover-affect" type="submit">Process to Payment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    function fetchAvailableTimes() {
        const date = document.getElementById('appointment_date').value;
        const doctorId = document.getElementById('doctor').value;

        if (date && doctorId) {
            fetch(`/get-booked-times?date=${date}&doctor_id=${doctorId}`)
                .then(response => response.json())
                .then(data => {
                    const timeSelect = document.getElementById('appointment_time');
                    timeSelect.innerHTML = ''; // Clear current options

                    // Define available time slots
                    const availableTimes = [
                        "10:00 AM - 10:30 AM", "10:30 AM - 11:00 AM", "11:00 AM - 11:30 AM",
                        "11:30 AM - 12:00 PM", "12:00 PM - 12:30 PM", "12:30 PM - 01:00 PM",
                        "01:30 PM - 02:00 PM", "02:00 PM - 02:30 PM", "02:30 PM - 03:00 PM",
                        "03:00 PM - 03:30 PM", "03:30 PM - 04:00 PM", "04:00 PM - 04:30 PM",
                        "04:30 PM - 05:00 PM", "05:00 PM - 05:30 PM", "05:30 PM - 06:00 PM"
                    ];

                    // Populate the time options based on availability
                    availableTimes.forEach(time => {
                        const isBooked = data.bookedTimes.includes(time);
                        const option = document.createElement('option');
                        option.value = time;
                        option.textContent = `${time} ${isBooked ? '(Booked)' : ''}`;
                        if (isBooked) {
                            option.classList.add('booked-time');
                            option.disabled = true;
                        }
                        timeSelect.appendChild(option);
                    });
                });
        }
    }
</script>

<style>
    .booked-time {
        color: red !important;
        font-weight: bold;
    }
</style>

          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/appointments/createAppointment.blade.php ENDPATH**/ ?>