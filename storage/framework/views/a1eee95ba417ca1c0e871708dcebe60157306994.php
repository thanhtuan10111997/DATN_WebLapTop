<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.slide.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper">
        <div class="widget">
            <div class="title">
                <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/dialog.png')); ?>" class="titleIcon" />
                <h6><?php echo e(__('Danh sách Slide')); ?></h6>
                <div class="num f12">Tổng số: <b><?php echo e(count($slide)); ?></b></div>
            </div>
            <?php if(count($slide)>0): ?>
                <div class="gallery">
                    <ul>
                        <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id=<?php echo e($row->id); ?>>
                            <a class="lightbox" title="Slide <?php echo e($row->id); ?>" href="" >
                                <img src="<?php echo e(url(config('app.slideUrl'))); ?>/<?php echo e($row->image_link); ?>" width='280px' />
                            </a>
                            <div class="actions">
                                <a href="<?php echo e(route('slide.edit', ['slide' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                                </a>
                                <a href="<?php echo e(route('slide.delete', ['id' => $row->id])); ?>" value="<?php echo e($row->id); ?>" title="Xóa" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/delete.png')); ?>" />
                                </a>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="clear mt20"></div>
                </div>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có slide nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
<div class="clear mt30"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>