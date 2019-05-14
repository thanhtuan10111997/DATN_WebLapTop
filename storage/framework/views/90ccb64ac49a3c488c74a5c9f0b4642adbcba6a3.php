<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
        <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <div class="account-login">
            <div class="page-title">
            <h2>KHÔI PHỤC MẬT KHẨU</h2>
        </div>
        <?php echo Form::open(['route' => 'password.email', 'method' => 'post', 'class' => 'form']); ?>

        <fieldset>
            <div class="registered-users">
            <div class="content">
                <p><?php echo e(__('Vui lòng nhập vào email, chúng tôi sẽ gửi địa chỉ thay đổi mật khẩu vào trong email này  của bạn')); ?></p>
                <ul class="form-list">
                    <li>
                        <label for="email">Email <span class="required">*</span></label>
                        <?php echo Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']); ?>

                    </li>
                </ul>
                <div class="buttons-set">
                    <button id="send2" name="send" type="submit" class="button login">
                        <span><?php echo e(__('GỬI')); ?></span>
                    </button>
                </div>
            </div>
            </div>
        </fieldset>
        <?php echo Form::close(); ?>

        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>