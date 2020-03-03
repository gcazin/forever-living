<?php $__env->startSection('content'); ?>
    <div class="first__section">
    <!--<div class="pb-10 flex justify-center items-center w-10/12 mx-auto">
            <div class="first__section-text flex-1">
                <h1 class="text-4xl text-gray-800">Titre principal de la section</h1>
                <p class="text-gray-700 py-4 pr-20">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
                <a href="#" class="btn btn-primary btn-lg">Découvrir le site</a>
            </div>
            <div class="flex-1">
                <img src="<?php echo e(asset('storage/images/accueil.svg')); ?>" alt="">
            </div>
        </div>-->

        <p class="py-10 text-2xl text-center text-gray-700">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet</p>
        <!-- Card container -->
        <div id="card-container" class="flex items-center">
            <v-card title="Améliorer votre santé et votre bien-être" link="<?php echo e(route('home')); ?>" button="<?php echo e(__('card.formation')); ?>"></v-card>
            <v-card title="Augmenter vos revenus" button="<?php echo e(__('card.formation')); ?>"></v-card>
            <v-card title="Faire des économies sur vos dépenses quotidiennes" button="<?php echo e(__('card.formation')); ?>"></v-card>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/index.blade.php ENDPATH**/ ?>