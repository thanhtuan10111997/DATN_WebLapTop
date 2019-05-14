<?php $__env->startSection('content'); ?>
    <section class="content-wrapper">
        <div class="container">
            <div class="std">
                <div class="page-not-found">
                    <h4><?php echo e(__('Cảm ơn bạn đã mua hàng, chúng tôi đã sẽ liên hệ với quý khách để xác nhận đơn hàng.')); ?></h4>
                    <h4><?php echo e(__('Nếu có bất kỳ thắc mắc vui lòng liên hệ ngay với chúng tôi để được giải đáp.')); ?></h4>
                    <br>
                    <div>
                        <a href="<?php echo e(route('site.home.index')); ?>" type="button" class="btn-home">
                            <span style="font-family:Arial" ><?php echo e(__('Trở về Trang chủ')); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>