<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="account-login">
                <div class="page-title">
                    <h2><?php echo e(__('Login Account')); ?></h2>
                </div>
                <?php echo Form::open(['route' => 'site.customer.login', 'method' => 'post', 'class' => 'form']); ?>

                <fieldset>
                    <div class="registered-users">
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <?php echo Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="pass">Password <span class="required">*</span></label>
                                    <?php echo Form::password('password', ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                            </ul>
                            <div class="checkbox">
                                <label>
                                    <?php echo Form::checkbox('remember', '1'); ?><?php echo e(__(' Remember Me')); ?>

                                </label>
                            </div>
                            <div class="buttons-set">
                                <?php echo e(Form::submit('Login', ['class' => 'button login'])); ?>

                                <a href="<?php echo e(route('site.customer.regester')); ?>" class="button login"><?php echo e(__('Register')); ?></a>
                                <a class="forgot-word" href="<?php echo e(route('password.request')); ?>"><?php echo e(__("Forgot Your Password ?")); ?></a></div>
                        </div>
                    </div>
                </fieldset>
                <?php echo Form::close(); ?>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>