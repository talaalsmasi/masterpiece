<!-- resources/views/Admin/users/index.blade.php -->


<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Users</h1>
        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-orange"><i class="fa-solid fa-plus"></i> User</a><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->name); ?></td>
                        <td>
                            <?php if($user->image): ?>
                                <img style="height: 50px;width:50px;border-radius:50%" src="<?php echo e(asset($user->image)); ?>" alt="Post Image" width="100">
                            <?php else: ?>
                                No image
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                        <td><?php echo e($user->role->name ?? 'N/A'); ?></td>
                        <td>
                            
                            <a href="<?php echo e(route('admin.users.show', $user->id)); ?>" style="color: #E17E2A;text-decoration:none;font-size:20px">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" style="color: #E17E2A;text-decoration:none;font-size:20px">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" style="background:none; border:none;color:#E17E2A;font-size:20px;margin-top:-10px">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div style="position: fixed; bottom:560px; right:300px;">
                    <img src="<?php echo e(asset('Admin/dog10.png')); ?>" alt="Dog Image" style="width: 200px; height: auto;">
                </div>
                <div style="position: fixed; bottom: 10px; right: -20px;">
                    <img src="<?php echo e(asset('Admin/dog2.jpg.png')); ?>" alt="Dog Image" style="width: 200px; height: auto;">
                </div>

            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/Admin/users/index.blade.php ENDPATH**/ ?>