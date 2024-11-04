<!-- resources/views/Admin/layouts/header.blade.php -->


<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">PetPal</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="#">
                    <?php echo e(auth()->user()->name); ?>

                    <i class="fa-solid fa-right-from-bracket"
                       style="cursor: pointer;"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
                            </li>
        </ul>
    </div>
</nav>


<?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/Admin/layouts/header.blade.php ENDPATH**/ ?>