<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('title', 'create appointment'); ?>
<?php $__env->startSection('content'); ?>
<style>
    option[disabled] {
    color: red;
    background-color: #ffcccc;
}
</style>
<section class="pet_appointment_wrap">
    <div class="container">
        <h4 class="appointment-main-title">Make an Appointment</h4>
        <form action="<?php echo e(route('appointment.payment')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <!-- اختيار الحيوان -->
            <div class="pet_appointment_colum">
                <h6>Your pet</h6>
                <select class="small" name="pet_id" id="pet">
                    <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pet->id); ?>"><?php echo e($pet->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- اختيار الخدمة -->
            <div class="pet_appointment_colum">
                <h6>Select a service</h6>
                <select class="small" name="service_id" id="service">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?> (<?php echo e($service->price); ?> USD)</option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- اختيار التاريخ -->
            <div class="pet_appointment_colum full-width">
                <h6>I am available on</h6>
                <input class="form-control" id="appointment_date" type="date" name="appointment_date" style="width: 99%">
            </div>

            <!-- اختيار الوقت -->
            <div class="pet_appointment_colum">
                <h6>Time</h6>
                <select class="small" name="appointment_time" id="appointment_time">
                    <?php $__currentLoopData = $availableTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($time); ?>"
                                <?php if(in_array($time, $bookedTimes)): ?> style="color: red;" disabled <?php endif; ?>>
                            <?php echo e($time); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- اختيار الطبيب -->
            <div class="pet_appointment_colum">
                <h6>Doctor</h6>
                <select class="small" name="doctor_id" id="doctor">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- زر الإرسال -->
            <div class="pet_appointment_colum">
                <button class="main_button btn2 bdr-clr hover-affect" type="submit">Proceed to Payment</button>
            </div>
        </form>
    </div>
</section>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    function fetchBookedTimes() {
        var appointmentDate = $('#appointment_date').val();
        var doctorId = $('#doctor').val();

        if (appointmentDate && doctorId) {
            $.ajax({
                url: '<?php echo e(route("appointments.getBookedTimes")); ?>',
                type: 'GET',
                data: {
                    appointment_date: appointmentDate,
                    doctor_id: doctorId
                },
                success: function(bookedTimes) {
                    var availableTimes = <?php echo json_encode($availableTimes); ?>;
                    var $timeSelect = $('#appointment_time');
                    $timeSelect.empty();

                    availableTimes.forEach(function(time) {
                        var isBooked = bookedTimes.includes(time);
                        var option = $('<option>', {
                            value: time,
                            text: time,
                            disabled: isBooked,
                            style: isBooked ? 'color: red;' : ''
                        });
                        $timeSelect.append(option);
                    });
                }
            });
        }
    }

    $('#appointment_date, #doctor').on('change', fetchBookedTimes);
});
</script>

          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/appointments/createAppointment.blade.php ENDPATH**/ ?>