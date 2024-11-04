<!-- resources/views/Admin/dashboard.blade.php -->


<?php $__env->startSection('title', 'Dashboard'); ?>


<?php $__env->startSection('content'); ?>
    <div class="dashboard">
        <div class="stats">
            <div class="stat-card">
                <h6>Veterinarians</h6>
                <p><?php echo e($veterinariansCount); ?></p>
            </div>
            <div class="stat-card">
                <h6>Registered Pets</h6>
                <p><?php echo e($registeredPetsCount); ?></p>
            </div>
            <div class="stat-card">
                <h6>Services Provided</h6>
                <p><?php echo e($servicesProvidedCount); ?></p>
            </div>
            <div class="stat-card">
                <h6>Adoptions</h6>
                <p><?php echo e($adoptionsCount); ?></p>
            </div>
        </div>

        <div class="charts">
            <div class="chart-container">
                <h6>Monthly Revenue</h6>
                <canvas id="revenueChart"></canvas>
            </div>
            <div class="chart-container">
                <h6>Pet Care Report</h6>
                <canvas id="careReportChart"></canvas>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('Admin/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/Admin/dashboard.blade.php ENDPATH**/ ?>