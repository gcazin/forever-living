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
    <style>
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dd-button {
            display: inline-block;
            border: 1px solid gray;
            border-radius: 4px;
            padding: 10px 30px 10px 20px;
            background-color: #ffffff;
            cursor: pointer;
            white-space: nowrap;
        }

        .dd-button:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid black;
        }

        .dd-button:hover {
            background-color: #eeeeee;
        }


        .dd-input {
            display: none;
        }

        .dd-menu {
            position: absolute;
            top: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 0;
            margin: 2px 0 0 0;
            box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
            background-color: #ffffff;
            list-style-type: none;
        }

        .dd-input + .dd-menu {
            display: none;
        }

        .dd-input:checked + .dd-menu {
            display: block;
        }

        .dd-menu li {
            padding: 10px 20px;
            cursor: pointer;
            white-space: nowrap;
        }

        .dd-menu li:hover {
            background-color: #f6f6f6;
        }

        .dd-menu li a {
            display: block;
            margin: -10px -20px;
            padding: 10px 20px;
        }

        .dd-menu li.divider{
            padding: 0;
            border-bottom: 1px solid #cccccc;
        }
    </style>
</head>
<body class="bg-gray-100">
<div id="app">
    <div class="bg-white border-b border-gray-300">
        <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <main
        class="content <?php if(isset($full) && $full === true): ?> w-full <?php else: ?> w-10/12 <?php endif; ?> mx-auto <?php if(isset($margin) && $margin === false): ?> null <?php else: ?> mt-10 mb-16 <?php endif; ?>">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /var/www/html/ForeverLiving/resources/views/layouts/app.blade.php ENDPATH**/ ?>