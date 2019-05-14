<?php if($errors->count()>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger"><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(Session::has('message')): ?>
    <div class="alert alert-danger">
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>
