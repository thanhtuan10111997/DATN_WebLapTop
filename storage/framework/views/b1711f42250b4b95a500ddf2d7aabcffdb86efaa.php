<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.admin.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <h6><?php echo e(__('Thông tin Admin')); ?></h6>
            </div>
            <?php if(isset($admin) && count($admin)>0): ?>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable">
                <thead>
                <tr>
                    <td><?php echo e(__('Mã số')); ?></td>
                    <td><?php echo e(__('Tên Admin')); ?></td>
                    <td><?php echo e(__('Email')); ?></td>
                    <td><?php echo e(__('Số điện thoại')); ?></td>
                    <td><?php echo e(__('Địa chỉ')); ?></td>
                    <td><?php echo e(__('Hành động')); ?></td>
                </tr>
                </thead>
                <tbody class="list_item">
                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class='row_9'>
                        <td class="textC"><?php echo e($row->id); ?></td>
                        <td class="textC"><?php echo e($row->name); ?></td>
                        <td class="textC"><?php echo e($row->email); ?></td>
                        <td class="textC"><?php echo e($row->phone); ?></td>
                        <td class="textC"><?php echo e($row->address->address); ?></td>
                        <td class="option textC">
                            <a href="<?php echo e(route('admin.edit', ['id' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có admin nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>