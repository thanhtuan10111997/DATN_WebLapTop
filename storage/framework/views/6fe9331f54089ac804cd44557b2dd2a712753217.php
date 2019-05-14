<?php $__env->startSection('content'); ?>
    <section class="content-wrapper">
        <div class="container">
            <div class="std">
                <div class="page-not-found">
                    <h2>404</h2>
                    <h3><img src="<?php echo e(asset('source/bower_components/library/site/version4/images/signal.png')); ?>">Rất tiếc! Trang bạn yêu cầu không tìm thấy!</h3>
                    <div>
                        <a href="<?php echo e(route('site.home.index')); ?>" type="button" class="btn-home">
                            <span>Trở về Trang chủ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>