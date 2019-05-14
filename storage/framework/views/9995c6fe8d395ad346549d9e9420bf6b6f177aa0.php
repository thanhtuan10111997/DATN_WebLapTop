<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.news.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => 'news.store', 'method' => 'post', 'class' => 'form', 'files' => true]); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Thêm mới tin tức')); ?></h6>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tiêu đề:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('title', old('title'), ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_email"><?php echo e(__('Nội dung:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="Two">
                                <?php echo Form::textarea('content', old('content'), ['required', 'autocomplete' => 'off', 'id' => 'content']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft"><?php echo e(__('Hình ảnh:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <div class="left">
                                <?php echo Form::file('avatar', ['required', 'accept' => 'image/*']); ?>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Thêm mới'), ['class' => 'dredB'])); ?>

                        <button class="basic">
                            <a href="<?php echo e(route('news.index')); ?>">Hủy bỏ</a>
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
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/add-ckeditor.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>