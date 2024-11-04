<?php $__env->startSection('title', 'posts'); ?>
<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('content'); ?>
            <section class="child_service_wrap blog-full">
                <div class="mian_heading text-center"><h2>Our posts</h2></div>

                <div class="container">
                    <div class="child_service_row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Start the foreach loop here -->
                            <div class="child_service_column">
                                <figure class="image-layer-affect">
                                    <img style="height: 374px ; width:567px" src="<?php echo e($post->image); ?>" alt="<?php echo e($post->content); ?>">
                                    
                                        </figure>
                                <div class="child_service_text">

                                    <h5><br><?php echo e($post->title); ?> <br></h5>
                                    <p><?php echo e($post->content); ?> <br></p> <!-- Updated to display post content -->


                                    
                                    <div class="child_service_botton_fig" style="margin-left: 3%">
                                        <figure><img style="height: 50px;width:50px;border-radius:50%" src="<?php echo e($post->user->image); ?>" alt=""></figure>
                                        <a href="<?php echo e(route('users.posts', $post->user->id)); ?>"><?php echo e($post->user ? $post->user->name : 'Anonymous'); ?></a> <!-- Display the author's name -->
                                    </div><br>
                                    <li style="margin-left: 3%">
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            <?php echo e($post->created_at ? $post->created_at->format('F j, Y') : 'Date not available'); ?>

                                        </a><br>
                                    </li>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- End the foreach loop here -->
                        <!--pet pagination start-->
                        
                        <!--pet pagination end-->
                    </div>
                </div>
            </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/posts/posts.blade.php ENDPATH**/ ?>