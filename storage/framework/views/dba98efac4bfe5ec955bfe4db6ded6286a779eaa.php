<?php $__env->startSection('content'); ?>
    <div style="font-family:Arial" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"><a title="Đi đến Trang chủ" href="index.html"><?php echo e(__('Trang Chủ')); ?></a> <span>/</span></li>
                        <li><strong><?php echo e(__('Liên Hệ Với Chúng Tôi')); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div style="font-family:Arial" class="main-container col2-right-layout">
        <div class="container">
            <div class="row">
                <section class="col-sm-9">
                    <div class="col-main">
                        <div class="static-inner">
                            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="page-title">
                                <h2><?php echo e(__('Liên Hệ Với Chúng Tôi')); ?></h2>
                            </div>
                            <div class="static-contain">
                                <?php echo Form::open(['route' => 'site.contact.create', 'method' => 'post', 'class' => 'form']); ?>

                                <fieldset class="group-select">
                                    <ul>
                                        <li id="billing-new-address-form">
                                            <fieldset>
                                                <ul>
                                                    <li>
                                                        <div class="customer-name">
                                                            <div class="input-box name-firstname">
                                                                <label for="billing:firstname"><?php echo e(__('Tên')); ?><span class="required">*</span></label>
                                                                <br>
                                                                <?php echo Form::text('user_name', old('user_name'), ['required', 'class' => 'input-text required-entry']); ?>

                                                            </div>
                                                            <div class="input-box name-lastname" style="width:466px">
                                                                <label for="billing:lastname"><?php echo e(__('Email')); ?><span class="required">*</span></label>
                                                                <br>
                                                                <?php echo Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']); ?>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label><?php echo e(__('Tiêu đề')); ?> <span class="required">*</span></label>
                                                        <br>
                                                        <?php echo Form::text('title', old('title'), ['required', 'class' => 'input-text required-entry']); ?>

                                                    </li>
                                                    <li class="">
                                                        <label for="comment"><?php echo e(__('Nội dung')); ?><em class="required">*</em></label>
                                                        <br>
                                                        <div class="">
                                                            <?php echo Form::textarea('content', old('content'), ['required', 'class' => 'input-text required-entry', 'cols' => 5, 'rows' => 5]); ?>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                        <li>
                                            <p style="color:red" class="require"><em class="required">* </em><?php echo e(__('Trường bắt buộc')); ?></p>
                                            <div class="buttons-set">
                                                <?php echo e(Form::submit(__('Gửi'), ['class' => 'button submit'])); ?>

                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>