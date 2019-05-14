<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="account-login">
                <div class="page-title">
                    <h2><?php echo e(__('Thông tin tài khoản')); ?></h2>
                </div>
                <?php echo Form::open(['route' => ['site.customer.update', $customer->id], 'method' => 'PUT', 'class' => 'form']); ?>

                <fieldset>
                    <div class="registered-users">
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="email"><?php echo e(__('Tên khách hàng')); ?><span class="required">*</span></label>
                                    <?php echo Form::text('name', $customer->name, ['required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="email"><?php echo e(__('Email')); ?></label>
                                    <?php echo Form::email('email', $customer->email, ['disabled', 'required', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="email"><?php echo e(__('Số điện thoại')); ?><span class="required">*</span></label>
                                    <?php echo Form::text('phone', $customer->phone, ['required', 'autocomplete' => 'off', 'class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="email"><?php echo e(__('Địa chỉ')); ?></label><br>
                                    <?php echo Form::select('address_id', $addresses, "$customer->address_id", ['class' => 'address selectpicker select-custom']); ?>

                                    <br><br>
                                </li>
                                <li>
                                    <label for="pass"><?php echo e(__('Mật khẩu')); ?></label>
                                    <?php echo Form::password('password', ['class' => 'input-text required-entry']); ?>

                                </li>
                                <li>
                                    <label for="pass"><?php echo e(__('Nhập lại mật khẩu')); ?></label>
                                    <?php echo Form::password('re_password', ['class' => 'input-text required-entry']); ?>

                                </li>
                            </ul>
                            <p class="required"><?php echo e(__('* Required Fields')); ?></p>
                            <div class="buttons-set">
                                <?php echo e(Form::submit('Update', ['class' => 'button login'])); ?>

                            </div>
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