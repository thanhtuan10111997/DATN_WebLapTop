<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.slide.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => 'slide.store', 'method' => 'post', 'class' => 'form', 'files' => true]); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Thêm mới Slide')); ?></h6>
                    </div>
                     <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tên slide:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneThree">
                                <?php echo Form::text('name', old('name'), ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="left">
                                <?php echo Form::file('avatar', ['required', 'accept' => 'image/*']); ?>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Thêm mới'), ['class' => 'dredB'])); ?>

                        <?php echo e(Form::reset(__('Hủy bỏ'), ['class' => 'basic'])); ?>

                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>