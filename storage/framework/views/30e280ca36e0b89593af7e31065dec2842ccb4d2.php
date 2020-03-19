<?php $__env->startSection('content'); ?>
    <div class="first__section">

        <p class="text-4xl text-center text-gray-700"><?php echo e(__('home.text')); ?></p>
        <!-- Card container -->
        <div id="card-container" class="flex flex-col lg:flex-row items-center">

            <!-- Première carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700"><?php echo e(__('home.first_card')); ?></span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="<?php echo e(route('show.home_content', 1)); ?>"><?php echo e(__('card.formation')); ?></a>
                    </div>
                </div>
            </div>

            <!-- Deuxième carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700"><?php echo e(__('home.second_card')); ?></span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="<?php echo e(route('question.home_content')); ?>"><?php echo e(__('card.formation')); ?></a>
                    </div>
                </div>
            </div>

            <!-- Troisième carte -->
            <div class="card slideUp">
                <div class="card-content">
                    <div style="z-index: 999" class="card-content__title">
                        <span class="text-2xl mx-5 h-20 text-gray-700"><?php echo e(__('home.third_card')); ?></span>
                    </div>
                    <div style="z-index: 999" class="card-content__body">
                        <a class="btn" href="<?php echo e(route('show.home_content', 2)); ?>"><?php echo e(__('card.formation')); ?></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/index.blade.php ENDPATH**/ ?>