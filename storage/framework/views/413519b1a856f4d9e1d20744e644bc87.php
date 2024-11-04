<?php $__env->startSection('from', 'Shop'); ?>
<?php $__env->startSection('title', $product->name . ' details'); ?>
<?php $__env->startSection('content'); ?>
			<section class="pet_detail_wrap">
				<div class="container">
					<div class="pet_detail_row">
						<div class="pet_product_detail">
							<div class="pet_product_slider">
								<ul class="bxslider bx-pager">
									<li><img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid"></li>
                                    <div>
                                        <a class="pet_heart_icon" href="<?php echo e(route('wishlist.add', $product->id)); ?>">
                                            <i style="margin-left: 1vh" class="fa <?php echo e(in_array($product->id, session('wishlist', [])) ? 'fa-heart' : 'fa-heart-o'); ?>"></i>
                                        </a>
                                       </div>
								</ul>
							</div>
							
						</div>

						<div class="pet_detail_text"><br><br><br>
							<h2><?php echo e($product->name); ?></h2>
							
							<div class="pet_product_price">
								<h4><?php echo e($product->price); ?>JD</h4>

							</div>
							<p><?php echo e($product->description); ?></p>

							<div class="pet_tags_icon">
								<ul class="pet_tags" style="color: black">
									<li><span>Stock:</span><?php echo e($product->stock_quantity); ?></li>
									<li><span>Categoires:</span> <?php echo e($product->category->name); ?> </li>
                                    <a class="pet_heart_icon" href="<?php echo e(route('wishlist.add', $product->id)); ?>">
                                        <i class="fa <?php echo e(in_array($product->id, session('wishlist', [])) ? 'fa-heart' : 'fa-heart-o'); ?>"></i>
                                    </a>

								</ul>
								

                                <div class="pet_spinner_list">
                                    <?php if($product->stock_quantity > 0): ?>
                                    <a class="theme_btn" href="<?php echo e(route('cart.add', $product->id)); ?>">add to cart</a>

                                <?php else: ?>
                                    <span style="color: red;">Out of Stock</span>
                                <?php endif; ?>

                                </div>
							</div>
						</div>
					</div>
				</div>
			</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/products/singleProduct.blade.php ENDPATH**/ ?>