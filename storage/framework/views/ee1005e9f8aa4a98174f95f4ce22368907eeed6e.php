<?php $__env->startSection('sidebar-mobile'); ?>
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?php echo e(route('home')); ?> ">
                        <img src="'<?php echo e(asset('images/icon/logo.png')); ?>" alt="<?php echo e(env("APP_NAME")); ?>" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    
                </ul>
            </div>
        </nav>
    </header>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/layouts/sidebar-mobile.blade.php ENDPATH**/ ?>