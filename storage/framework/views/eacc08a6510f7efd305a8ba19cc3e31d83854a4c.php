<?php $__env->startSection('content'); ?>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo e(__('Bình luận')); ?></h5>
                <span><?php echo e(__('Quản lý Bình luận')); ?></span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
                <h6>
                <h6>
                    <?php echo e(__('Danh sách bình luận')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($comment)); ?></b></div>
            </div>
            <?php if(isset($comment) && count($comment)>0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/tableArrows.png')); ?>" /></td>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Mã khách hàng')); ?></td>
                        <td><?php echo e(__('Tên khách hàng')); ?></td>
                        <td><?php echo e(__('Tên sản phẩm')); ?></td>
                        <td><?php echo e(__('Nội dung')); ?></td>
                        <td><?php echo e(__('Ngày tạo')); ?></td>
                        <td><?php echo e(__('Hành động')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <td><?php echo Form::checkbox('id[]', $row->id, false, ['class' => 'check-del']); ?></td>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($row->user->id); ?></td>
                            <td class="textC"><?php echo e($row->user->name); ?></td>
                            <td class="textC"><?php echo e($row->product->name); ?></td>
                            <td class="textC"><?php echo e($row->content); ?></td>
                            <td class="textC"><?php echo e($row->created_at); ?></td>
                            <td class="textC">
                                <a href="<?php echo e(route('comment.view', ['id' => $row->id])); ?>" title="Xem chi tiết" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/view.png')); ?>" />
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="list_action itemActions">
                    <a href="<?php echo e(route('comment.delMulCom')); ?>" id="delMul" class="button blueB">
                        <span><?php echo e(__('Xóa')); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có bình luận nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>