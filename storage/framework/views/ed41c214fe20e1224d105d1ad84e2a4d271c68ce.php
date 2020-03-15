<?php $__env->startSection('content'); ?>
    <div class="flex my-6">
        <div class="dashboard-card" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600"><?php echo e(__('auth/admin/dashboard.members')); ?></h1>
            </div>
            <div class="flex-1 flex self-center mt-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\User::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="dashboard-card" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600">Formations publiées</h1>
            </div>
            <div class="flex-1 flex self-center mt-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\Formation::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="dashboard-card" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600">Formations sur l'accueil</h1>
            </div>
            <div class="flex-1 flex self-center mt-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\HomeContent::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

    </div>
    <?php echo $__env->make('auth.admin.partials.users-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/admin/dashboard.blade.php ENDPATH**/ ?>