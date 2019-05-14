<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.customer.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => 'customer.store', 'method' => 'post', 'class' => 'form']); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Thêm mới khách hàng')); ?></h6>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tên khách hàng:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('name', old('name'), ['required', 'autocomplete' => 'off']); ?>

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
                                <?php echo Form::email('email', old('email'), ['required', 'autocomplete' => 'off']); ?>

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
                                <?php echo Form::text('phone', old('phone'), ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_address"><?php echo e(__('Địa chỉ:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <?php echo Form::select('address_id', $addresses, null, ['class' => 'address']); ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_password"><?php echo e(__('Mật khẩu:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::password('password', ['required']); ?>

                            </span> 
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_repassword"><?php echo e(__('Nhập lại mật khẩu:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::password('re_password', ['required']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Thêm mới'), ['class' => 'dredB'])); ?>

                        <button class="basic">
                            <a href="<?php echo e(route('customer.index')); ?>">Hủy bỏ</a>
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/select2.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/add-select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>