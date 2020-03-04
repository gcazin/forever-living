<nav class="" role="navigation">
    <div class="mx-auto py-4 flex flex-wrap items-center md:flex-no-wrap">
        <div class="">
            <a href="<?php echo e(route('home')); ?>" rel="home">
                <img src="https://photos.smugmug.com/photos/i-VKnSVxZ/0/X2/i-VKnSVxZ-X2.png" class="h-16">
            </a>
        </div>
        <div class="ml-auto md:hidden">
            <button class="flex items-center px-3 py-2 border rounded" type="button">
                <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="w-full md:w-auto md:flex-grow md:flex md:items-center">
            <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary"><?php echo e(auth()->user()->id); ?></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/html/ForeverLiving/resources/views/auth/components/menu.blade.php ENDPATH**/ ?>
