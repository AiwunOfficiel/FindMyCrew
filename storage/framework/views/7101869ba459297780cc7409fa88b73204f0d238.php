<?php $__env->startSection('title', 'Inscription'); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="<?php echo e(asset('images/icon/logo.png')); ?>" alt="<?php echo e(env("APP_NAME")); ?>">
                </a>
            </div>
            <div class="login-form">
                <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                     <div class="form-group">
                        <label>Pseudo</label>
                        <input class="au-input au-input--full" type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Pseudo">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input class="au-input au-input--full" type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        
                        <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe">
                    </div>
                    <!--<div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="aggree">Agree the terms and policy
                        </label>
                    </div>-->
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">S'inscrire</button>
                </form>
                <div class="register-link">
                    <p>
                        Vous possédez déjà un compte?
                        <a href="<?php echo e(route('login')); ?>">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/FindMyCrew/resources/views/auth/register.blade.php ENDPATH**/ ?>