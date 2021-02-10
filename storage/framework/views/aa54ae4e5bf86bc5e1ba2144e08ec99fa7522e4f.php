<?php $__env->startSection('title', 'Tableau de bord'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Create a new message</h1>
    <form action="<?php echo e(route('messages.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                       value="<?php echo e(old('subject')); ?>">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control"><?php echo e(old('message')); ?></textarea>
            </div>

            <?php if($users->count() > 0): ?>
                <div class="checkbox">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label title="<?php echo e($user->name); ?>"><input type="checkbox" name="recipients[]"
                                                                value="<?php echo e($user->id); ?>"><?php echo $user->name; ?></label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/message/create.blade.php ENDPATH**/ ?>