<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="account-login">
                <div class="page-title">
                    <h2 style="font-family:Arial"><?php echo e(__('Đăng Ký Tài Khoản')); ?></h2>
                </div>
                <?php echo Form::open(['route' => 'site.customer.store', 'method' => 'post', 'class' => 'form']); ?>

                <fieldset>
                    <div class="registered-users">
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="email"><?php echo e(__('Tên khách hàng')); ?><span class="required">*</span></label>
                                    <?php echo Form::text('name', old('name'), ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="email"><?php echo e(__('Email')); ?><span class="required">*</span></label>
                                    <?php echo Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="email"><?php echo e(__('Số điện thoại')); ?><span class="required">*</span></label>
                                    <?php echo Form::text('phone', old('phone'), ['required', 'autocomplete' => 'off', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li style="margin: 20px 20px 20px 0">
                                    <label style="margin-right: 20px" for="email"><?php echo e(__('Địa chỉ')); ?><span class="required">*</span></label>
                                    <?php echo Form::select('address_id', $addresses, null, ['class' => 'address']); ?>

                                </li>
                                <li>
                                    <label for="pass"><?php echo e(__('Mật khẩu')); ?> <span class="required">*</span></label>
                                    <?php echo Form::password('password', ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="pass"><?php echo e(__('Nhập lại mật khẩu')); ?><span class="required">*</span></label>
                                    <?php echo Form::password('re_password', ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                            </ul>
                            <p class="required"><?php echo e(__('(*) Trường bắt buộc')); ?></p>
                            <div class="buttons-set">
                                <?php echo e(Form::submit('ĐĂNG KÝ', ['class' => 'button login'])); ?>

                                <a class="forgot-word" href="<?php echo e(route('site.customer.login')); ?>"><?php echo e(__("Bạn đã có tài khoản?")); ?></a></div>
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
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>