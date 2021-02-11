<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo e(env('APP_NAME')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
        <link href="<?php echo e(asset('css/font-face.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet" media="all">
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <?php if(auth()->guard()->check()): ?>
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
                                <?php $__env->startSection('sidebar-menu'); ?>
                                    <li>
                                        <a href="<?php echo e(route('home')); ?>">
                                            <i class="fas fa-tachometer-alt"></i>Acceuil
                                        </a>
                                    </li>
                                <?php echo $__env->yieldSection(); ?>
                            </ul>
                        </div>
                    </nav>
                </header>
                <aside class="menu-sidebar d-none d-lg-block">
                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('images/icon/logo.png')); ?>" alt="<?php echo e(env("APP_NAME")); ?>" />
                        </a>
                    </div>
                    <div class="menu-sidebar__content js-scrollbar1">
                        <nav class="navbar-sidebar">
                            <ul class="list-unstyled navbar__list">
                                <?php echo $__env->yieldContent('sidebar-menu'); ?>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="page-container">
                    <header class="header-desktop">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="header-wrap">
                                    <div class="header-button">
                                        <div class="noti-wrap">
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-comment-more"></i>
                                                <?php if($count > 0): ?>
                                                    <span class="quantity"><?php echo e($count); ?></span>
                                                <?php endif; ?>
                                                <div class="mess-dropdown js-dropdown">
                                                    <div class="mess__title">
                                                        <p>Vous avez <?php echo e($count); ?> nouveau(x) message(s)</p>
                                                    </div>
                                                    <?php if($count > 0): ?>
                                                        <?php echo $__env->renderEach('message.thread', $threads, 'thread', 'message.no-thread'); ?>
                                                    <?php endif; ?>
                                                    <?php if($count > 0): ?>
                                                        <div class="mess__footer">
                                                            <a href="#">Voir tout mes messages</a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="noti__item js-item-menu">
                                                <i class="zmdi zmdi-notifications"></i>
                                                <span class="quantity">3</span>
                                                <div class="notifi-dropdown js-dropdown">
                                                    <div class="notifi__title">
                                                        <p>You have 3 Notifications</p>
                                                    </div>
                                                    <div class="notifi__item">
                                                        <div class="bg-c1 img-cir img-40">
                                                            <i class="zmdi zmdi-email-open"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>You got a email notification</p>
                                                            <span class="date">April 12, 2018 06:50</span>
                                                        </div>
                                                    </div>
                                                    <div class="notifi__footer">
                                                        <a href="#">All notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                            <i class="zmdi zmdi-account"></i>Mon compte</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Paramètres</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo e(route('logout')); ?>"><i class="zmdi zmdi-power"></i>Se déconnecter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="overview-wrap">
                                            <h2 class="title-1"><?php echo $__env->yieldContent('title'); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $__env->yieldContent('content'); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="page-content--bge5">
                    <div class="container">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <script src="<?php echo e(asset('vendor/jquery-3.2.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/slick/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/wow/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/animsition/animsition.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/counter-up/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/circle-progress/circle-progress.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    </body>
</html><?php /**PATH /var/www/FindMyCrew/resources/views/layouts/head.blade.php ENDPATH**/ ?>