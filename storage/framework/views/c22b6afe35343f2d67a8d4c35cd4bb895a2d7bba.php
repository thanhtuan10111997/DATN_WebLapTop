<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.customer.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
                <h6>
                    <?php echo e(trans('common.title.dskh')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($user)); ?></b></div>
            </div>
            <?php if(isset($user) && count($user) > 0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/tableArrows.png')); ?>" /></td>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Tên khách hàng')); ?></td>
                        <td><?php echo e(__('Email')); ?></td>
                        <td><?php echo e(__('Số điện thoại')); ?></td>
                        <td><?php echo e(__('Địa chỉ')); ?></td>
                        <td><?php echo e(__('Hành động')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <td><?php echo Form::checkbox('id[]', $row->id, false, ['class' => 'check-del']); ?></td>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($row->name); ?></td>
                            <td class="textC"><?php echo e($row->email); ?></td>
                            <td class="textC"><?php echo e($row->phone); ?></td>
                            <td class="textC"><?php echo e($row->address->address); ?></td>
                            <td class="option textC">
                                <a href="<?php echo e(route('customer.edit', ['customer' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                                </a>
                                <a href="<?php echo e(route('customer.delete')); ?>" value="<?php echo e($row->id); ?>" title="Xóa" class="tipS delete" >
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/delete.png')); ?>" />
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="list_action itemActions">
                    <a href="<?php echo e(route('customer.delMulCus')); ?>" id="delMul" class="button blueB">
                        <span><?php echo e(__('Xóa')); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <h5 class="eror"><?php echo e(trans('common.error.kkh')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>