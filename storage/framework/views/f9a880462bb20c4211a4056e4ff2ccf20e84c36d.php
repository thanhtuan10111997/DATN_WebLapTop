<?php $__env->startSection('content'); ?>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo e(__('Bình luận Mã ')); ?> <?php echo e($comment->id); ?></h5>
                <div class="clear"></div>
                <span><?php echo e(__('Nội dung bình luận')); ?></span>
                <div><?php echo Form::textarea('content', $comment->content, ['disabled', 'id' => 'content']); ?></div>
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
                    <?php echo e(__('Danh sách trả lời')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($comment->replies)); ?></b></div>
            </div>
            <?php if(isset($comment) && count($comment->replies) > 0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/tableArrows.png')); ?>" /></td>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Tên khách hàng')); ?></td>
                        <td><?php echo e(__('Tên sản phẩm')); ?></td>
                        <td><?php echo e(__('Nội dung')); ?></td>
                        <td><?php echo e(__('Ngày tạo')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <td><?php echo Form::checkbox('id[]', $row->id, false, ['class' => 'check-del']); ?></td>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($row->user->name); ?></td>
                            <td class="textC"><?php echo e($row->product->name); ?></td>
                            <td class="textC"><?php echo e($row->content); ?></td>
                            <td class="textC"><?php echo e($row->created_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="list_action itemActions">
                    <a href="<?php echo e(route('comment.delMulRep')); ?>" id="delMul" class="button blueB reply-del">
                        <span><?php echo e(__('Xóa')); ?></span>
                    </a>
                    <a style="margin-left: 25px" href="<?php echo e(route('comment.index')); ?>" class="button basic">
                        <span><?php echo e(__('Quay lại')); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có trả lời nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/add-ckeditor.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>