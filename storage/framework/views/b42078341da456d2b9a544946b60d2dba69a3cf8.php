<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl text-gray-800">Bienvenue dans votre espace formation</h1>

    <div class="flex my-6">
        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 border border-gray-300 rounded-full mx-auto">
                <img class="p-5 h-24" src="https://image.flaticon.com/icons/svg/189/189103.svg" alt="">
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-xl text-gray-600" href="">Produits</span>
            </div>
            <a href="#" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 rounded-lg shadow bg-white px-2 py-4 mx-10">
            <a class="text-xl text-orange-600" href="">Produits</a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 border border-gray-300 rounded-full mx-auto">
                <img class="p-5 h-24" src="https://image.flaticon.com/icons/svg/189/189107.svg" alt="">
            </div>
            <div class="flex-1 flex self-center py-5 relative">
                Business
            </div>
            <a href="#" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>
    </div>

    <div class="mt-2 text-right">
        <a class="btn btn-red" href="<?php echo e(route('logout')); ?>">Déconnexion</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/fbo/dashboard.blade.php ENDPATH**/ ?>