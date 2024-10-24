<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/admin/modules/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/admin/modules/fontawesome/css/all.min.css')); ?>">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/admin/css/components.css')); ?>">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php echo $__env->make('layouts.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php echo $__env->make('layouts.admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/layouts/admin/main.blade.php ENDPATH**/ ?>