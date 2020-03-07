<?php $__env->startSection('content'); ?>
    <div class="container-full">
        <div class="text-center">
            <h1 class="text-2xl text-gray-700"><i class="far fa-envelope"></i> Votre demande de mot de passe à bien été prise en compte</h1>
            <div class="mt-5 mb-1">
                <a class="btn btn-light" href="<?php echo e(route('home')); ?>">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/fbo/register-confirm.blade.php ENDPATH**/ ?>