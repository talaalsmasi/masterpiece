<?php $__env->startSection('from', 'Room Details'); ?>
<?php $__env->startSection('title', 'create appointment'); ?>
<?php $__env->startSection('content'); ?>

            <section class="pet_appointment_wrap">

                <div class="container">
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?> <br>
                   <h4 class="appointment-main-title">Make an Appointment</h4>
                   <form action="<?php echo e(route('bookings.payment')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="room_id" value="<?php echo e($room->id); ?>">
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

                            <div class="pet_appointment_colum full-width">
                                <h6>Check-in Date:</h6>
                                <div class="">
                                    <input class="form-control" id="check_in_date" placeholder="Select a date" type="text" name="check_in_date" style="width: 120%">
                                </div>
                            </div>
                            <div class="pet_appointment_colum full-width">
                                <h6>Check-out Date:</h6>
                                <div class="">
                                    <input class="form-control" id="check_out_date" placeholder="Select a date" type="text" name="check_out_date" style="width: 120%">
                                </div><br>
                            </div>

                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">Process to Payment</button>
                            </div>
                        </div>
                    </div>
                </form>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // تحويل تواريخ الحجز المحجوزة إلى جافا سكريبت
                    const bookings = <?php echo json_encode($bookings, 15, 512) ?>;

                    // قائمة التواريخ المحجوزة
                    let disabledDates = [];

                    bookings.forEach(booking => {
                        const startDate = new Date(booking.check_in_date);
                        const endDate = new Date(booking.check_out_date);

                        // إضافة جميع التواريخ المحجوزة بين check_in_date و check_out_date إلى القائمة
                        for (let d = startDate; d <= endDate; d.setDate(d.getDate() + 1)) {
                            disabledDates.push(new Date(d).toISOString().split('T')[0]); // صيغة YYYY-MM-DD
                        }
                    });

                    // إعداد Flatpickr لتعطيل التواريخ المحجوزة
                    flatpickr("#check_in_date", {
                        dateFormat: "Y-m-d",
                        disable: disabledDates, // تعطيل التواريخ المحجوزة
                        minDate: "today" // بدءًا من اليوم الحالي
                    });

                    flatpickr("#check_out_date", {
                        dateFormat: "Y-m-d",
                        disable: disabledDates, // تعطيل التواريخ المحجوزة
                        minDate: "today" // بدءًا من اليوم الحالي
                    });
                });
                </script>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
     <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/bookings/createBooking.blade.php ENDPATH**/ ?>