<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.product.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper">
        <!-- Form -->
        <?php echo Form::open(['route' => ['product.update', 'product' => $product->id], 'method' => 'put', 'class' => 'form', 'files' => true, 'multiple']); ?>

            <fieldset>
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/add.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Cập nhật sản phẩm')); ?></h6>
                    </div>
                    <ul class="tabs">
                        <li class="activeTab"><a href="#tab1"><?php echo e(__('Thông tin chung')); ?></a></li>
                        <li class=""><a href="#tab2"><?php echo e(__('Thông số kỹ thuật')); ?></a></li>
                    </ul>
                    <div class="tab_container">
                    <div class="tab_content pd0" id="tab1">
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Tên sản phẩm:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('name', $product->name, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft" for="param_email"><?php echo e(__('Mô tả:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="Two">
                                <?php echo Form::textarea('descript', $product->descript, ['required', 'autocomplete' => 'off', 'id' => 'content']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--Quantity-->
                   <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Số lượng:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneFour">
                                <?php echo Form::number('quantities', $product->quantities, ['required', 'autocomplete' => 'off', 'min' => 1, 'style' => 'width:100px']); ?>

                                <img class='tipS img-price' title='Giá bán' src="<?php echo e(asset('source/bower_components/library/backend/admin/crown/images/icons/notifications/information.png')); ?>"/>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--Price-->
                    <div class="formRow">
                        <label class="formLeft" for="param_price">Giá bán:
                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('price', $product->price, ['required', 'autocomplete' => 'off', 'class' => 'format_number input_price']); ?>

                                <img class='tipS img-price' title='Giá bán' src="<?php echo e(asset('source/bower_components/library/backend/admin/crown/images/icons/notifications/information.png')); ?>"/>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--Discount-->
                    <div class="formRow">
                        <label class="formLeft" for="param_discount">Giảm giá:
                            <span></span>
                        </label>
                        <div class="formRight">
                            <span>
                            <?php echo Form::text('discount', $product->discount, ['autocomplete' => 'off', 'class' => 'format_number input_price']); ?>

                            <img class='tipS img-discount' title='Giảm giá' src="<?php echo e(asset('source/bower_components/library/backend/admin/crown/images/icons/notifications/information.png')); ?>"/>
                            </span>
                        </div>
                    <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="param_cat" class="formLeft"><?php echo e(__('Danh mục:')); ?><span class="req">*</span></label>
                        <div class="formRight">
                            <?php echo Form::select('category_id', $list, $product->category->id); ?>

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft"><?php echo e(__('Hình ảnh:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>" width="350">
                            <div class="clear mt15"></div>
                            <div class="left">
                                <?php echo Form::file('avatar', ['accept' => 'image/*']); ?>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label class="formLeft"><?php echo e(__('Ảnh kèm theo:')); ?></label>
                        <?php if(count($product->images)>0): ?>
                            <div class="gallery formRight">
                                <ul>
                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li id=<?php echo e($row->id); ?>>
                                        <a class="lightbox" title="product <?php echo e($row->id); ?>" href="" >
                                            <img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->image_link); ?>" width='150px' />
                                        </a>
                                        <!-- <div class="actions">
                                            <a href="<?php echo e(route('product.edit', ['product' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                                <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                                            </a>
                                            <a href="<?php echo e(route('product.delete', ['id' => $row->id])); ?>" value="<?php echo e($row->id); ?>" title="Xóa" class="tipS">
                                                <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/delete.png')); ?>" />
                                            </a>
                                        </div> -->
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="clear mt20"></div>
                            </div>
                        <?php endif; ?>
                        <div class="formRight">
                            <div class="left">
                                <?php echo Form::file('image_id[]', ['multiple', 'accept' => 'image/*']); ?>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                    <div class="tab_content pd0" id="tab2">
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Màn hình:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('screen', $product->configuration->screen, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                     <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Hệ điều hành:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('os', $product->configuration->os, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('CPU:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('front_camera', $product->configuration->front_camera, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Card màn hình:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('back_camera', $product->configuration->back_camera, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('RAM:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('ram', $product->configuration->ram, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Ổ cứng:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('memory', $product->configuration->memory, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">   
                        <label class="formLeft" for="param_name"><?php echo e(__('Cổng kết nối:')); ?>

                            <span class="req">*</span>
                        </label>
                        <div class="formRight">
                            <span class="oneTwo">
                                <?php echo Form::text('battery_capacity', $product->configuration->battery_capacity, ['required', 'autocomplete' => 'off']); ?>

                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    </div><!-- End tab_container-->
                    </div>
                    <div class="formSubmit">
                        <?php echo e(Form::submit(__('Cập nhật'), ['class' => 'dredB'])); ?>

                        <button class="basic">
                            <a href="<?php echo e(route('product.index')); ?>">Hủy bỏ</a>
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        <?php echo Form::close(); ?>

    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/add-ckeditor.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/backend/js/tab.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>