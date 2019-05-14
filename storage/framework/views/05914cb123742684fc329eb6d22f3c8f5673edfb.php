<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<!-- Left side content -->
<?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Right side -->
<div id="rightSide">
    <!-- Account panel top -->
    <div class="topNav">
        <?php echo $__env->make('admin.head-right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- Main content -->
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo e(trans('common.layout.bang_dieu_kien')); ?></h5>
                <span><?php echo e(trans('common.layout.tqtht')); ?></span>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Message -->
    <!-- Main content wrapper -->
    <?php echo $__env->yieldContent('content'); ?>
    <div class="clear mt30"></div>
    <!-- Footer -->
    <?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="clear"></div>
</body>
</html>
