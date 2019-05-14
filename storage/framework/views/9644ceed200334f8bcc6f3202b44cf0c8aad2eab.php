<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.product.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
                <h6>
                    <?php echo e(__('Danh sách sản phẩm')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($product)); ?></b></div>
            </div>
            <?php if(isset($product) && count($product)>0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/tableArrows.png')); ?>" /></td>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Tên sản phẩm')); ?></td>
                        <td><?php echo e(__('Ảnh')); ?></td>
                        <td><?php echo e(__('Danh mục')); ?></td>
                        <td><?php echo e(__('Giá')); ?></td>
                        <td><?php echo e(__('Hành động')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="row_<?php echo e($row->id); ?>">
                            <td><?php echo Form::checkbox('id[]', $row->id, false, ['class' => 'check-del']); ?></td>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC">
                                <div>
                                    <a href="" class="tipS" title="chi tiết" target="_blank">
                                        <b><?php echo e($row->name); ?></b>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="image_thumb">
                                    <img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>" height="50">
                                </div>
                            </td>
                            <td class="textC"><?php echo e($row->category->name); ?></td>
                            <td class="textC">
                                <?php echo e(number_format($row->price - $row->discount)); ?> đ
                                <?php if($row->discount > 0): ?>
                                    <p style='text-decoration:line-through'><?php echo e(number_format($row->price)); ?> đ</p>
                                <?php endif; ?>
                            </td>
                            <td class="option textC">
                                <a href="<?php echo e(route('product.edit', ['product' => $row->id])); ?>" title="Chỉnh sửa" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/edit.png')); ?>" />
                                </a>
                                <a href="<?php echo e(route('product.delete', ['id' => $row->id])); ?>" value="<?php echo e($row->id); ?>" title="Xóa" class="tipS delete" >
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/delete.png')); ?>" />
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php if(count($product)>0): ?>
                    <tr>
                        <td colspan="7">
                            <div class="list_action itemActions">
                                <a href="<?php echo e(route('product.delMulProd')); ?>" id="delMul" class="button blueB del">
                                    <span><?php echo e(__('Xóa')); ?></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có sản phẩm nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>