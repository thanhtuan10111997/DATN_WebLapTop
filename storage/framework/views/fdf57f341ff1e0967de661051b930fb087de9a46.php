<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="nobg loginPage">
<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="widget" id="admin_login">
        <div class="title"><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/lock.png')); ?>" alt="" class="titleIcon" />
            <h6><?php echo e(trans('common.button.login')); ?></h6>
        </div>
         <?php echo Form::open(['method' => 'post', 'class' => 'form']); ?>

            <fieldset>
                <div class="formRow">
                    <?php echo Form::label('email', 'Email:'); ?>

                    <div class="loginInput">
                        <?php echo Form::email('email', old('email'), ['required']); ?>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <?php echo Form::label('password', 'Mật khẩu:'); ?>

                    <div class="loginInput">
                        <?php echo Form::password('password', ['required']); ?>

                    </div>
                    <div class="clear"></div>
                </div>
               
                <div class="loginControl">
                    <div class="checkbox">
                        <label>
                            <?php echo Form::checkbox('remember', '1'); ?>

                            <span><?php echo e(__(' Nhớ mật khẩu')); ?></span>
                        </label>
                    </div>
                    <?php echo e(Form::submit(trans('common.button.login'), ['class' => 'dredB logMeIn'])); ?>

                        <span>
                            <a href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Quên mật khẩu ?')); ?>

                            </a>
                        </span>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

    </div>
    <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>
</html>
