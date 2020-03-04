<?php $__env->startSection('content'); ?>
    <div class="container-full w-4/12 mx-auto">
        <div class="form-group">
            <v-input label="Entrer votre passcode" name="passcode" placeholder="Entrer votre passcode"></v-input>
        </div>
        <button class="btn btn-blue btn-block" type="submit">Connexion</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/guest/login.blade.php ENDPATH**/ ?>