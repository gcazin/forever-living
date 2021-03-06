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
<div class="flex flex-col lg:flex-none">
    <div class="lg:w-2/12 bg-gray-700 lg:fixed lg:h-full">

        <!-- Logo -->
        <div class="bg-gray-800 flex items-center justify-center" style="height: 65px;">
            <img src="<?php echo e(asset('storage/images/logo.png')); ?>" class="h-12">
        </div>

        <?php echo $__env->make('auth.admin.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <div class="lg:ml-64 flex-1 bg-gray-100">

        <!-- Menu -->
        <div class="px-4 mb-4 bg-white flex items-center justify-end" style="height: 65px;">
            <ul>
                <li>
                    <label class="dropdown">
                        <img class="h-8 rounded-full cursor-pointer" src="<?php echo e(asset('storage/avatars/'.auth()->user()->avatar)); ?>" alt="">
                        <input type="checkbox" class="dd-input" id="test">
                        <ul class="dd-menu">
                            <?php if(auth()->check() && auth()->user()->role_id === 1): ?>
                                <li><a href="<?php echo e(route('dashboard.admin')); ?>">Administration</a></li>
                            <?php endif; ?>
                            <?php if(auth()->check()): ?>
                                <li><a href="<?php echo e(route('dashboard.fbo')); ?>">Mon compte</a></li>
                            <?php endif; ?>
                                <li><a href="<?php echo e(route('home')); ?>">Revenir au site</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo e(route('logout')); ?>">Déconnexion</a></li>
                        </ul>
                    </label>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="px-8 mb-4">
            <h1 class="text-2xl text-gray-800">Dashboard</h1>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/admin/layouts/app.blade.php ENDPATH**/ ?>