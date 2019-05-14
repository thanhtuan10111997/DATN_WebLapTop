<?php $__env->startSection('content'); ?>
    <div class="container" style="text-align: center;margin-top: 150px">
      <div class="std">
        <div class="page-not-found">
          <h2>404</h2>
          <h3><img src="<?php echo e(asset('source/bower_components/library/site/version4/images/signal.png')); ?>">Oops! The Page you requested was not found!</h3>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>