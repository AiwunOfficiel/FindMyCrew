<?php $__env->startSection('sidebar'); ?>
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('images/icon/logo.png')); ?>" alt="<?php echo e(env("APP_NAME")); ?>" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    
                </ul>
            </nav>
        </div>
    </aside>
<?php echo $__env->yieldSection(); ?>
<?php echo $__env->make('layouts.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>