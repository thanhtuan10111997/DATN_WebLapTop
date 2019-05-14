<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.category.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => ['category.update', 'category' => $category->id], 'method' => 'put', 'class' => 'form']); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Cập nhật danh mục')); ?></h6>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tên danh mục:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('name', $category->name, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_address"><?php echo e(__('Loại danh mục:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <?php echo Form::select('parent_id', $type_category, "$category->parent_id"); ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Cập nhật'), ['class' => 'dredB'])); ?>

                        <button class="basic">
                            <a href="<?php echo e(route('category.index')); ?>">Hủy bỏ</a>
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>