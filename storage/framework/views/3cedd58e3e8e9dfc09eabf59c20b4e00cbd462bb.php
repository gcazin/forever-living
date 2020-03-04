<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('getPassword')); ?>" method="post">
        <div class="w-full lg:w-8/12 mx-auto">
            <h1 class="text-xl lg:text-3xl text-gray-700 mb-3"><?php echo e(__('auth/form.request_password')); ?></h1>
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
                    <v-input label="<?php echo e(__('auth/form.fbo_number')); ?>" name="fbo_number" placeholder="FBO000000"></v-input>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg px-4 pt-4 mb-4 flex flex-col">
                <div class="form-group">
                    <v-input label="<?php echo e(__('auth/form.first_name')); ?>" name="last_name" placeholder="Dupont"></v-input>
                    <v-input label="<?php echo e(__('auth/form.last_name')); ?>" name="first_name" placeholder="Jean"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="<?php echo e(__('auth/form.tel')); ?>" name="tel" placeholder="0102030405"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="<?php echo e(__('auth/form.email')); ?>" name="email" placeholder="email@contact.com"></v-input>
                </div>
                <div class="form-group">
                    <v-input label="<?php echo e(__('auth/form.postal_code')); ?>" name="city_code" placeholder="10000"></v-input>
                    <v-input label="<?php echo e(__('auth/form.city')); ?>" name="city" placeholder="Somme"></v-input>
                </div>

                <button class="btn btn-blue btn-block mb-4" type="submit"><?php echo e(__('auth/form.submit')); ?></button>
            </div>

        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/register.blade.php ENDPATH**/ ?>
