<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.admin.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => ['admin.update', $admin->id], 'method' => 'post', 'class' => 'form']); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Cập nhật thông tin Admin')); ?></h6>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tên Admin:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('name', $admin->name, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_email"><?php echo e(__('Email:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::email('email', $admin->email, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_phone"><?php echo e(__('Số điện thoại:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('phone', $admin->phone, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_address"><?php echo e(__('Địa chỉ:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <?php echo Form::select('address_id', $addresses, "$admin->address_id", ['class' => 'address']); ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_password"><?php echo e(__('Mật khẩu:')); ?></label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::password('password'); ?>

                            </span> 
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_repassword"><?php echo e(__('Nhập lại mật khẩu:')); ?></label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::password('re_password'); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Cập nhật'), ['class' => 'redB'])); ?>

                        <button class="basic">
                            <a href="<?php echo e(route('admin.index')); ?>">Hủy bỏ</a>
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

        <p class="col-sm-offset-4 note"><b><?php echo e(__('Chú ý')); ?></b> : <i><?php echo e(__('Nếu bạn không thay đổi mật khẩu thì không cần phải nhập vào')); ?></i></p>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/select2.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/add-select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>