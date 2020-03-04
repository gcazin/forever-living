<nav class="w-10/12 mx-auto" role="navigation">
    <div class="mx-auto py-4 flex flex-wrap items-center md:flex-no-wrap">
        <div class="">
            <a href="<?php echo e(route('home')); ?>" rel="home">
                <img src="https://photos.smugmug.com/photos/i-VKnSVxZ/0/X2/i-VKnSVxZ-X2.png" class="h-16">
            </a>
        </div>
        <div class="w-full md:w-auto md:flex-grow md:flex md:items-center">
            <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
                <li class="mr-3 text-gray-600">
                    <a href="<?php echo e(route('lang', 'fr')); ?>">
                        <img class="inline" style="width: 20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1280px-Flag_of_France.svg.png" alt="">
                    </a>
                    /
                    <a href="<?php echo e(route('lang', 'en')); ?>">
                        <img class="inline" style="width: 20px" src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Great_Britain_%28English_version%29.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">MyAllonsY</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/html/ForeverLiving/resources/views/components/menu.blade.php ENDPATH**/ ?>
