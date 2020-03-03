<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('getPasscode')); ?>" method="post" @submit="checkForm">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-4 mb-5 flex flex-col my-2">
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <div class="bg-white shadow-md rounded-lg px-4 pt-4 mb-5 flex flex-col">
            <div class="form-group">
                <v-input label="Numéro FBO" name="fbo_number" placeholder="Numéro FBO"></v-input>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg px-4 pt-4 mb-4 flex flex-col">
            <div class="form-group">
                <v-input label="Nom" name="last_name" placeholder="Nom"></v-input>
                <v-input label="Prénom" name="first_name" placeholder="Prénom"></v-input>
            </div>
            <div class="form-group">
                <v-input label="Numéro de téléphone" name="tel" placeholder="Numéro de téléphone"></v-input>
            </div>
            <div class="form-group">
                <v-input label="Adresse email" name="email" placeholder="Adresse email"></v-input>
            </div>
            <div class="form-group">
                <v-input label="Code postal" name="city_code" placeholder="Code postal"></v-input>
                <v-input label="Ville" name="city" placeholder="Ville"></v-input>
            </div>
        </div>

            <button class="btn btn-blue btn-block" type="submit">Valider</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/request-password.blade.php ENDPATH**/ ?>
