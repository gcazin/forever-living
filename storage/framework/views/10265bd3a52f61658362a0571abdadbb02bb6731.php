<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script src="https://kit.fontawesome.com/458ecbc1c5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
</head>
<body class="bg-gray-100">
<div id="app">
    <div class="test">
        <main class="content <?php if (! empty(trim($__env->yieldContent('full')))): ?> w-full <?php else: ?> w-10/12 <?php endif; ?> mx-auto">
            <?php if(!isset($user_nav)): ?>
                <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('auth.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</div>
</body>
</html>
<?php /**PATH /var/www/html/ForeverLiving/resources/views/layouts/app.blade.php ENDPATH**/ ?>