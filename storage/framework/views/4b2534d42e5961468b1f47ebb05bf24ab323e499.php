<?php $__env->startSection('user'); ?>
    <div class="account-wrap">
        <div class="account-item clearfix js-item-menu">
            <div class="image">
                <img src="images/icon/avatar-01.jpg" alt="<?php echo e(Auth::user()->name); ?>" />
            </div>
            <div class="content">
                <a class="js-acc-btn" href="#"><?php echo e(Auth::user()->name); ?></a>
            </div>
            <div class="account-dropdown js-dropdown">
                <div class="info clearfix">
                    <div class="image">
                        <a href="#">
                            <img src="images/icon/avatar-01.jpg" alt="<?php echo e(Auth::user()->name); ?>" />
                        </a>
                    </div>
                    <div class="content">
                        <h5 class="name">
                            <a href="#"><?php echo e(Auth::user()->name); ?></a>
                        </h5>
                        <span class="email"><?php echo e(Auth::user()->email); ?></span>
                    </div>
                </div>
                <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                </div>
                <div class="account-dropdown__footer">
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <a href=""><i class="zmdi zmdi-power"></i>Se déconnecter</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/layouts/user.blade.php ENDPATH**/ ?>