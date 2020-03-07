<?php $__env->startSection('content'); ?>
    <div class="first__section">

        <p class="text-4xl text-center text-gray-700"><?php echo e(__('home.text')); ?></p>
        <!-- Card container -->
        <div id="card-container" class="flex flex-col lg:flex-row items-center">
            <v-card title="<?php echo e(__('home.first_card')); ?>"
                    link="<?php echo e(route('show.formation', 1)); ?>" button="<?php echo e(__('card.formation')); ?>"></v-card>
            <v-card title="<?php echo e(__('home.second_card')); ?>"
                    link="<?php echo e(route('login.passcode')); ?>" button="<?php echo e(__('card.formation')); ?>"></v-card>
            <v-card title="<?php echo e(__('home.third_card')); ?>"
                    link="<?php echo e(route('show.formation', 2)); ?>" button="<?php echo e(__('card.formation')); ?>"></v-card>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/index.blade.php ENDPATH**/ ?>