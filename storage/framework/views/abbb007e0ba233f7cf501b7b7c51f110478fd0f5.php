<?php $__env->startSection('title', 'Tableau de bord'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('error_message')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(Session::get('error_message')); ?>

        </div>
    <?php endif; ?>
    <div class="alert alert-warning">Grosse pute</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/home.blade.php ENDPATH**/ ?>