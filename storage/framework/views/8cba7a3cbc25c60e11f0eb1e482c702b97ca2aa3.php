<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li class="dd"><a title=""><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/topnav/messages.png')); ?>" alt=""><span><?php echo e(__('Thông báo')); ?></span><span class="numberTop"><?php echo e(isset($total_not) ? $total_not : 0); ?></span></a>
                    <ul class="userDropdown">
                        <div class="result">
                        <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php if($row->read_at == null): ?>
                                    <a id="<?php echo e(__('new_')); ?><?php echo e($row->id); ?>" href="<?php echo e(route('notif.view', ['id' => $row->id])); ?>" title="" class="sAdd not_view new">
                                <?php else: ?>
                                    <a id="<?php echo e(__('new_')); ?><?php echo e($row->id); ?>" href="<?php echo e(route('notif.view', ['id' => $row->id])); ?>" title="" class="sAdd not_view">
                                <?php endif; ?>
                                    <?php echo e(json_decode($row->data, true)['message']); ?>

                                <br><?php echo e($row->created_at->diffForHumans()); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php if(count($notification) > 0): ?>
                        <li class="all"><?php echo e(__('Xem tất cả')); ?></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('site.home.index')); ?>" target="_blank">
                        <img id="head-right-img" src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/light/home.png')); ?>" />
                        <span><?php echo e(trans('common.head.trang_chu')); ?></span>
                    </a>
                </li>
                <!-- Logout -->
                <li>
                    <a href="<?php echo e(route('admin.logout')); ?>">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/topnav/logout.png')); ?>" alt="" />
                        <span><?php echo e(trans('common.head.dang_xuat')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Main content -->
