<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM0sP3tnE7GkKk0h4/4e2ZlEwtJtTjAl1bl1BKe" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">
<!-- Color CSS -->

<link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet"/>
        <!-- Datepicker CSS -->
        <link href="<?php echo e(asset('css/dcalendar.picker.css')); ?>" rel="stylesheet"/>
        <!-- Animate CSS -->
        <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet"/>
        <!-- Animation CSS -->
        <link href="<?php echo e(asset('css/animation.css')); ?>" rel="stylesheet"/>
        <!-- Demo CSS -->
        <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet"/>
        <!-- ICONS CSS -->
        <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
        <!-- jQuery bxSlider CSS -->
        <link href="<?php echo e(asset('css/jquery.bxslider.css')); ?>" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="<?php echo e(asset('css/component.css')); ?>" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="<?php echo e(asset('css/typography.css')); ?>" rel="stylesheet">
        <!-- Style Icon CSS -->
        <link href="<?php echo e(asset('css/style-icon.css')); ?>" rel="stylesheet"/>
        <!-- Custom Main StyleSheet CSS -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <!-- Color CSS -->
        <link href="<?php echo e(asset('css/color.css')); ?>" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
        <!-- login CSS -->
        <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
        <style>
            /* .body{
                background-image: url(/images/bg-paw.png);

background-color: rgb(249, 246, 246);
            } */
             .body{
                color: black
             }
        </style>



    </head>
    <body class="">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    </body>
</html>

<?php /**PATH C:\Users\Orange\Desktop\project vet pet\project\resources\views/layouts/index.blade.php ENDPATH**/ ?>