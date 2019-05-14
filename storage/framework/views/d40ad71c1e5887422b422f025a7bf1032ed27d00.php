<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.category.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <h6>
                    <?php echo e(__('Danh sách danh mục')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($category)); ?></b></div>
            </div>
            <?php if(isset($category) && count($category)>0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Tên danh mục')); ?></td>
                        <td><?php echo e(__('Danh mục cha')); ?></td>
                        <td><?php echo e(__('Hành động')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($row->name); ?></td>
                            <td class="textC"><?php echo e($row->parent_id); ?></td>
                            <td class="option textC">
                                <a href="<?php echo e(route('category.edit', ['id' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                                </a>
                                <a href="<?php echo e(route('category.delete')); ?>" value="<?php echo e($row->id); ?>" title="Xóa" class="tipS delete category" check="<?php echo e(route('category.checkChild')); ?>">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/delete.png')); ?>" />
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có danh mục nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>