<?php $__env->startSection('full', false); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-full max-w-lg mx-auto">
        <form class="bg-white rounded mb-1" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <v-input label="Numéro FBO" name="fbo_number" placeholder="Numéro FBO"></v-input>
            </div>

            <div class="form-group">
                <v-input type="password" label="Mot de passe" name="password" placeholder="Mot de passe"></v-input>
            </div>

            <?php $__errorArgs = ['passcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="form-group" style="margin-left: 0 !important;">
                <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="form-check-label" for="remember">
                    <?php echo e(__('Se souvenir de moi')); ?>

                </label>
            </div>
            <div class="flex items-center justify-between">
                <button class="btn btn-blue" type="button">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/login.blade.php ENDPATH**/ ?>