<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="account-login">
                <div class="page-title">
                    <h2 style="font-family:Arial"><?php echo e(__('Đăng Nhập Tài Khoản')); ?></h2>
                </div>
                <?php echo Form::open(['route' => 'site.customer.login', 'method' => 'post', 'class' => 'form']); ?>

                <fieldset>
                    <div class="registered-users">
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="email">Email <span class="required">*</span></label>
                                    <?php echo Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="pass">Mật khẩu <span class="required">*</span></label>
                                    <?php echo Form::password('password', ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                            </ul>
                            <div class="checkbox">
                                <label>
                                    <?php echo Form::checkbox('remember', '1'); ?><?php echo e(__(' Nhớ mật khẩu')); ?>

                                </label>
                            </div>
                            <div class="buttons-set">
                                <?php echo e(Form::submit('ĐĂNG NHẬP', ['class' => 'button login'])); ?>

                                <a class="forgot-word" href="<?php echo e(route('password.request')); ?>"><?php echo e(__("Quên Mật Khẩu?")); ?></a></div>
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