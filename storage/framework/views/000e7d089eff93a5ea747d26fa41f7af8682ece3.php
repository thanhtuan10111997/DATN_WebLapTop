<?php $__env->startSection('content'); ?>
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <section class="col-sm-12 col-xs-12">
                    <div class="cart-page-area">
                        <h2><?php echo e(__('Lịch sử đặt hàng của bạn')); ?></h2>
                        <?php if(count($history) > 0): ?>
                            <h4><?php echo e(__('Danh sách đơn đặt hàng của bạn')); ?></h4>
                            <div class="table-responsive">
                                <table class="shop-cart-table data-cart">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail "><?php echo e(__('Mã đơn hàng')); ?></th>
                                        <th class="product-product"><?php echo e(__('Phương thức thanh toán')); ?></th>
                                        <th class="product-price" style="width: 100px"><?php echo e(__('Đơn giá')); ?></th>
                                        <th class="product-subtotal" style="width: 140px"><?php echo e(__('Ngày tạo')); ?></th>
                                        <th class="product-quantity"><?php echo e(__('Trạng thái')); ?></th>
                                        <th class="product-remove"><?php echo e(__('Chi tiết')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="cart_item">
                                            <td class="item-title">
                                                <?php echo e($row->id); ?>

                                            </td>
                                            <td class="item-title">
                                                <?php echo e($row->payment); ?>

                                            </td>
                                            <td class="item-price"> 
                                                <?php echo e(number_format($row->amount, null, null, ",")); ?> đ
                                            </td>
                                            <td class="item-qty"><?php echo e($row->created_at); ?></td>
                                            <td class="item-qty">
                                                <?php echo e($row->status); ?>

                                            </td>
                                            <td class="remove-item">
                                                <a  class="view-detail" value="<?php echo e($row->id); ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <section class="content-wrapper">
                                <div class="container">
                                    <div class="std">
                                        <div class="page-not-found">
                                            <h4><?php echo e(__('Bạn chưa có đơn đặt đơn hàng nào')); ?></h4>
                                            <br>
                                            <div>
                                                <a href="<?php echo e(route('site.home.index')); ?>" type="button" class="btn-home">
                                                    <span><?php echo e(__('Tiếp tục mua hàng')); ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/site/version4/js/add-view-detail.js')); ?>">
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>