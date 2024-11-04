<?php $__env->startSection('title', 'FeedBack'); ?>
<?php $__env->startSection('content'); ?>
        <style>
            .stars {
    direction: rtl; /* لتسهيل النقر على النجوم */
    display: inline-block;
}

.stars {
    display: flex;
    direction: row;
    margin-right: 8vh;
    margin-top: -5vh
}

.stars input {
    display: none; /* إخفاء الراديو */
}

.stars label {
    font-size: 24px; /* حجم النجوم */
    color: gray; /* لون النجوم الافتراضي */
    cursor: pointer;
}

.stars input:checked ~ label {
    color: gold; /* لون النجوم عند الاختيار */
}

.stars label:hover,
.stars label:hover ~ label {
    color: gold; /* لون النجوم عند التمرير */
}
.stars {
    color: #FFD700; /* Gold color for filled stars */
}

.star {
    font-size: 20px; /* Adjust size as needed */
    margin-right: 2px; /* Space between stars */
}


        </style>


            <section class="pet_exercise_wrap" style="margin-left: 24%">
                <div class="container" >
                  <!--pet exercise row service03 start-->
                  <div class="pet_service_detail">
                    <div class="pet_service_detail_row service03">



                      <div class="pet_comments">
                         <div class="mian_heading text-center"><h2>Our Client Feedback</h2></div>

                        <ul id="pet_comment" class="comment">
                            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="pet_comment_item padding-top">
                                    <figure class="imghvr-strip-shutter-up">
                                        
                                        <img style="height: 77px;width:76px;border-radius:50%" src="<?php echo e($rating->user->image); ?>" alt="<?php echo e($rating->user->name); ?>">
                                    </figure>
                                    <div class="pet_comment_text">
                                        <h5><?php echo e($rating->user->name); ?></h5>
                                        
                                        <p><?php echo e($rating->feedback); ?></p>
                                        <div>
                                            <i style="color: black;font-size:10px" class="fa fa-calendar"></i>
                                        <span style="color: black;font-size:13px"><?php echo e($rating->created_at ? $rating->created_at->format('F j, Y') : 'Date not available'); ?></span>
                                        </div>

                                  


                                        <!-- Displaying the stars -->
                                        <div class="stars">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <?php if($i <= $rating->rating): ?>
                                                    <span class="star">&#9733;</span> <!-- Filled star -->
                                                <?php else: ?>
                                                    <span class="star">&#9734;</span> <!-- Empty star -->
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                      <div class="contact_form_column blog-detail">
                        
                        <a href="<?php echo e(route('ratings.show')); ?>" class="main_button btn2 bdr-clr hover-affect">Add a feedback</a>
                        <a href="<?php echo e(route('home')); ?>" class="main_button btn2 bdr-clr hover-affect">Back to Home</a>

                      </div>
                    </div>
                    <div class="pet_sidebar_widget">
                </div>
              </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/home/feedback.blade.php ENDPATH**/ ?>