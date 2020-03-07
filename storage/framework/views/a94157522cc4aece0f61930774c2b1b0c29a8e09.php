<?php $__env->startSection('full', false); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-lg mx-auto">
        <h1 class="text-xl text-gray-800">Connexion au tableau de bord</h1>
        <div class="container-full">
            <form method="POST" action="<?php echo e(route('login.fbo')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="form-group">
                    <label for="fbo_number">Numéro FBO</label>
                    <input class="<?php $__errorArgs = ['fbo_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="fbo_number" placeholder="Numéro FBO">
                </div>

                <?php $__errorArgs = ['fbo_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="error-message">
                        <?php echo e($errors->first('fbo_number')); ?>

                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" type="password" name="password" placeholder="Mot de passe">
                </div>

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="error-message">
                        <?php echo e($errors->first('password')); ?>

                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group-checkbox mb-3" style="margin-left: 0 !important;">
                    <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Se souvenir de moi')); ?>

                    </label>
                </div>

                <button class="btn btn-blue btn-block" type="submit">
                    <?php echo e(__('auth/form.submit')); ?>

                </button>
            </form>

            <div class="form-group mt-3">
                <a href="<?php echo e(route('showForm.register.fbo')); ?>" class="mt-4 text-blue-500">Vous n'avez pas de mot de passe?</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        let formGroup = document.getElementById('form-group');
        let errorMessage = formGroup.nextElementSibling;
        let input = formGroup.getElementsByTagName('input')

        console.log(errorMessage)

        if (errorMessage.length > 0) {
            /*for(let i = 0; i < formGroup.length; i++) {
                input.push(formGroup[i].getElementsByTagName('input'))
                span.push(formGroup[i].nextElementSibling);
            }*/
            for (let i = 0; i < input.length; i++) {
                input[j].addEventListener('click', bindClick(i))
            }
        }

        function bindClick(i) {
            return function() {
                console.log("you clicked region number " + i);
            };
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/fbo/login.blade.php ENDPATH**/ ?>