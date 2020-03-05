<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('auth.admin.components.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="w-10/12 mx-auto">
        <?php echo $__env->yieldContent('dashboard'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['full' => true, 'margin' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/admin/layouts/app.blade.php ENDPATH**/ ?>