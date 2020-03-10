<?php $__env->startSection('dashboard'); ?>
    <h1 class="text-3xl text-gray-800"><?php echo e(__('auth/admin/dashboard.title')); ?></h1>
    <div class="flex my-6">

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600"><?php echo e(__('auth/admin/dashboard.members')); ?></h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\User::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative mx-10 hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600"><?php echo e(__('auth/admin/dashboard.members')); ?></h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\Formation::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600"><?php echo e(__('auth/admin/dashboard.members')); ?></h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\HomeContent::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

    </div>

    <?php echo $__env->make('auth.admin.partials.users-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mt-2 text-right">
        <a class="btn btn-red" href="<?php echo e(route('logout')); ?>">Déconnexion</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/admin/dashboard.blade.php ENDPATH**/ ?>