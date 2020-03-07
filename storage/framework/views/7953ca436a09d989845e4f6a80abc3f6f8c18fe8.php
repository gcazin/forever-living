<?php $__env->startSection('content'); ?>
    <div class="container-full w-4/12 mx-auto">
        <form action="<?php echo e(route('login.passcode')); ?>?id=<?php echo e(isset($_GET['id']) ? $_GET['id'] : 1); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="form-label" for="passcode">Entrer votre passcode</label>
                <input
                    id="passcode"
                    class="form-control <?php $__errorArgs = ['passcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    label="Entrer votre passcode"
                    name="passcode"
                    placeholder="Entrer votre passcode"
                    value="<?php echo e(old('passcode')); ?>">

                <?php $__errorArgs = ['passcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="error-message">
                    <?php echo e($errors->first('passcode')); ?>

                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <button class="btn btn-blue btn-block" type="submit">Connexion</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/passcode/login.blade.php ENDPATH**/ ?>