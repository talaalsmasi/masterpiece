<?php $__env->startSection('title', 'product'); ?>
<?php $__env->startSection('from', 'Home'); ?>
<?php $__env->startSection('content'); ?>
              <!--shop wraper start-->
             <!-- نموذج الفلترة --> <br><br>
             <div class="mian_heading text-center"><h2>Shop</h2></div>

<div class="filter-wrapper" style="width:90%;margin-left:17%;">

    <form style="display:flex;flex-direction:row;gap:3vh" method="GET" action="<?php echo e(route('products.showProducts')); ?>">
        <div style="width: 20%">
            <label class="appointment-main-title" for="category">Category:</label>
            <select style="border-radius: 3vh; height: 6vh;border:solid black 2px"
            class="appointment-main-title" name="category" id="category">
                <option value="">All Categories</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div style="width: 20%;">
            <label class="appointment-main-title" for="min_price">Min Price:</label>
            <input style="border-radius: 3vh;border:solid black 2px" class="appointment-main-title" type="number" name="min_price" placeholder="Min Price" value="<?php echo e(request('min_price')); ?>">
        </div>

        <div style="width:20%">
            <label class="appointment-main-title" for="max_price">Max Price:</label>
            <input style="border-radius: 3vh;border:solid black 2px" class="appointment-main-title" type="number" name="max_price" placeholder="Max Price" value="<?php echo e(request('max_price')); ?>">
        </div>
        <button style="border-radius: 3vh;margin-top:6vh;width:15vh; height: 6vh;border:solid black 2px" class="appointment-main-title" type="submit">Filter</button>
    </form>
</div>

<section class="pet_shop_wraper">
    <div class="container">
        <div class="pet_shop_row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pet_shop_column">
                    <figure>
                        <img style="height: 257px; width: 250px;" src="<?php echo e(asset($product->image)); ?>" alt="Product image">
                       <div>
                        <a class="pet_heart_icon" href="<?php echo e(route('wishlist.add', $product->id)); ?>">
                            <i class="fa <?php echo e(in_array($product->id, session('wishlist', [])) ? 'fa-heart' : 'fa-heart-o'); ?>"></i>
                        </a>
                       </div>
                    </figure>
                    <div class="pet_shop_text">
                        <h4><a href="<?php echo e(route('product.single', $product->id)); ?>"><?php echo e($product->name); ?></a></h4>
                        <span style="color: black"><?php echo e($product->description); ?></span>
                        <div class="product_price">
                            <h6><a href="#">$<?php echo e($product->price); ?></a></h6>
                            <?php if($product->stock_quantity > 0): ?>
                                <a href="<?php echo e(route('cart.add', $product->id)); ?>"><i class="fa fa-cart-arrow-down"></i></a>
                            <?php else: ?>
                                <span style="color: red;">Out of Stock</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pet-pagination">
        <ul>
            <!-- Previous Page Link -->
            <?php if($products->onFirstPage()): ?>
                <li><a class="previous-btn" href="#" style="pointer-events: none; opacity: 0.5;">Previous</a></li>
            <?php else: ?>
                <li><a class="previous-btn" href="<?php echo e($products->previousPageUrl()); ?>">Previous</a></li>
            <?php endif; ?>

            <!-- Page Numbers -->
            <?php for($i = 1; $i <= $products->lastPage(); $i++): ?>
                <li>
                    <a href="<?php echo e($products->url($i)); ?>" class="<?php echo e($i == $products->currentPage() ? 'active' : ''); ?>">
                        <?php echo e($i); ?>

                    </a>
                </li>
            <?php endfor; ?>
            <!-- Next Page Link -->
            <?php if($products->hasMorePages()): ?>
                <li><a class="previous-btn next-btn" href="<?php echo e($products->nextPageUrl()); ?>">Next</a></li>
            <?php else: ?>
                <li><a class="previous-btn next-btn" href="#" style="pointer-events: none; opacity: 0.5;">Next</a></li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/products/showProduct.blade.php ENDPATH**/ ?>