<?php echo $__env->yieldContent('full'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl text-gray-800">Bienvenue dans votre espace admin</h1>

    <div class="flex my-6">

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl text-gray-600">Nombre de membres FBO</h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-blue-600"><?php echo e(count(\App\User::all())); ?></span>
            </div>
            <a href="#utilisateurs" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative mx-10 hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl">Salut</h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-green-600" href=""></span>
            </div>
            <a href="#" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

        <div class="w-1/3 flex flex-col rounded-lg shadow bg-white px-2 pt-5 relative hover:shadow-lg" style="transition: 0.2s">
            <div class="flex-1 mx-auto">
                <h1 class="text-2xl">Salut</h1>
            </div>
            <div class="flex-1 flex self-center py-5">
                <span class="text-3xl text-orange-600" href="">19119</span>
            </div>
            <a href="#" class="absolute top-0 bottom-0 left-0 right-0"></a>
        </div>

    </div>

    <div class="container-full" id="utilisateurs">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Utilisateurs</h2>
        </div>
        <div class="my-2 flex sm:flex-row flex-col">
            <div class="flex flex-row mb-1 sm:mb-0">
                <div class="relative">
                    <select
                        class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
                <div class="relative">
                    <select
                        class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                        <option>Tout</option>
                        <option>FBO</option>
                        <option>Admin</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                <input placeholder="Search"
                       class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
            </div>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Utilisateur
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Numéro FBO
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Passcode
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Adresse email
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Rôles
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full"
                                             src="<?php echo e((new \App\User())::avatar($user->id)); ?>"
                                             alt="" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo e($user->last_name.' '.$user->first_name); ?>

                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->fbo_number); ?></p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->passcode); ?></p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->email); ?></p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap"><?php echo e(\App\User::find($user->role_id)->role['description']); ?></p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <a href="#" class="relative">Modifier</a>
                                    </span>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                        </span>
                    <div class="flex mt-2 xs:mt-0">
                        <div
                            class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                            <?php echo e($users->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-2 text-right">
        <a class="btn btn-red" href="<?php echo e(route('logout')); ?>">Déconnexion</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/admin/dashboard.blade.php ENDPATH**/ ?>