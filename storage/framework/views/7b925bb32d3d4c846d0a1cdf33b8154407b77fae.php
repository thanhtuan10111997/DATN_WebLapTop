<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5><?php echo e(__('Tin tức')); ?></h5>
            <span><?php echo e(__('Quản lý tin tức')); ?></span>
        </div>
        <div class="horControlB menu_action">
            <ul>
                <li>
                    <a href="<?php echo e(route('news.create')); ?>">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/control/16/add.png')); ?>">
                        <span><?php echo e(trans('common.head.tm')); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('news.index')); ?>">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/control/16/list.png')); ?>">
                        <span><?php echo e(trans('common.head.ds')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="line"></div>
<div class="wrapper">
<?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
