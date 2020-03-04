<?php $__env->startSection('full', false); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-lg mx-auto">
        <h1 class="text-xl text-gray-800">Connexion au tableau de bord</h1>
        <div class="container-full">
            <form method="POST" action="<?php echo e(route('login.fbo')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <v-input label="<?php echo e(__('auth/form.fbo_number')); ?>" name="fbo_number" placeholder="Numéro FBO"></v-input>
                </div>

                <div class="form-group">
                    <v-input type="password" label="<?php echo e(__('auth/form.password')); ?>" name="password" placeholder="Mot de passe"></v-input>
                </div>

                <div class="mb-3" style="margin-left: 0 !important;">
                    <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Se souvenir de moi')); ?>

                    </label>
                </div>

                <button class="btn btn-blue btn-block" type="submit">
                    <?php echo e(__('auth/form.submit')); ?>

                </button>
            </form>

            <div class="form-group " style="margin-left: 0 !important;" >
                <a href="<?php echo e(route('showForm.register.fbo')); ?>" class="mt-4 text-blue-500">Vous n'avez pas de mot de passe?</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/fbo/login.blade.php ENDPATH**/ ?>