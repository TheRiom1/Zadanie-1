<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?> | Rejestr osobowy</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <?php echo $__env->make('partials/navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page Content -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</body>

</html>
<?php /**PATH E:\rosobowy\resources\views/layout/app.blade.php ENDPATH**/ ?>