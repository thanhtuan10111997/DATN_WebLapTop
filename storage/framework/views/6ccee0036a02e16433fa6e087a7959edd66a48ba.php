<div id="left_content">
    <div id="leftSide" class="side-bar">
        <!-- Account panel -->
        <div class="sideProfile">
            <a href="" title="" class="profileFace"><img width="40" src="<?php echo e(asset('source/bower_components/library/backend/admin/images/user.png')); ?>" /></a>
            <span><?php echo e(trans('common.sidebar.hello')); ?> <strong><?php echo e(trans('common.sidebar.admin')); ?></strong></span>
            <span><?php echo e(Auth::user()->name); ?></span>
            <div class="clear"></div>
        </div>
        <div class="sidebarSep"></div>
        <!-- Left navigation -->
        <ul id="menu" class="nav">
            <li class="home">
                <a href="<?php echo e(route('home.index')); ?>" class="active" id="current">
                    <span><?php echo e(trans('common.layout.bang_dieu_kien')); ?></span>
                    <strong></strong>
                </a>
            </li>
            <li class="tran">
                <a href="" class=" exp" >
                    <span><?php echo e(trans('common.sidebar.qlbh')); ?></span>
                    <strong><?php echo e(__('1')); ?></strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="<?php echo e(route('order.index')); ?>">
                            <?php echo e(__('Quản lý đơn hàng')); ?>

                        </a>
                    </li>
                </ul>
            </li>
            <li class="product">
                <a href="" class=" exp" >
                    <span><?php echo e(trans('common.sidebar.sp')); ?></span>
                    <strong><?php echo e(trans('common.sidebar.sp_nb')); ?></strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="<?php echo e(route('product.index')); ?>">
                            <?php echo e(trans('common.sidebar.sp')); ?>

                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('category.index')); ?>">
                            <?php echo e(trans('common.sidebar.dm')); ?>

                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('comment.index')); ?>">
                            <?php echo e(trans('common.sidebar.bl')); ?>

                        </a>
                    </li>
                </ul>
            </li>
            <li class="account">
                <a href="" class=" exp" >
                    <span><?php echo e(trans('common.sidebar.tk')); ?></span>
                    <strong><?php echo e(trans('common.sidebar.qlbh_nb')); ?></strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="<?php echo e(route('admin.index')); ?>">
                            <?php echo e(trans('common.sidebar.Admin')); ?>

                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('customer.index')); ?>">
                            <?php echo e(trans('common.sidebar.customer')); ?>

                        </a>
                    </li>
                </ul>
            </li>
            <li class="content">
                <a href="" class=" exp" >
                    <span><?php echo e(trans('common.sidebar.nd')); ?></span>
                    <strong><?php echo e(__('3')); ?></strong>
                </a>
                <ul class="sub">
                    <li >
                        <a href="<?php echo e(route('slide.index')); ?>">
                            <?php echo e(trans('common.sidebar.slide')); ?>

                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('news.index')); ?>">
                            <?php echo e(trans('common.sidebar.news')); ?>

                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('contact.index')); ?>">
                            <?php echo e(__('Liên hệ')); ?>

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
