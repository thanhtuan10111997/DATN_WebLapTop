<?php $__env->startSection('content'); ?>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo e(__('Chi tiết đơn đặt hàng')); ?></h5>
            </div>
            <div class="clear"></div>
            <h6><?php echo e(__('Trạng thái đơn đặt hàng : ')); ?>

                <?php echo e($order->status); ?>

            </h6>
            <h6><?php echo e(__('Thông tin khách hàng')); ?></h6>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable">  
                <tbody class="list_item">
                    <tr>
                        <td><?php echo e(__('Họ và tên')); ?></td>
                        <td class="textC"><?php echo e($user->name); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Email')); ?></td>
                        <td class="textC"><?php echo e($user->email); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Số điện thoại')); ?></td>
                        <td class="textC"><?php echo e($user->phone); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Địa chỉ')); ?></td>
                        <td class="textC"><?php echo e($user->address->address); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Địa chỉ giao hàng')); ?></td>
                        <td class="textC"><?php echo e($order->address_ship); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Tin nhắn')); ?></td>
                        <td class="textC"><?php echo e($order->note); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Hình thức nhận hàng')); ?></td>
                        <td class="textC"><?php echo e($order->shipping_method); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Phương thức thanh toán')); ?></td>
                        <td class="textC"><?php echo e($order->payment); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('Ngày đặt hàng')); ?></td>
                        <td class="textC"><?php echo e($order->created_at); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <h6>
                    <?php echo e(__('Chi tiết đơn hàng')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($orderDetails)); ?></b></div>
            </div>
            <?php if(isset($orderDetails) && count($orderDetails) > 0): ?>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><?php echo e(__('Mã đơn hàng')); ?></td>  
                        <td><?php echo e(__('Mã sản phẩm')); ?></td>
                        <td><?php echo e(__('Tên sản phẩm')); ?></td>
                        <td><?php echo e(__('Đơn giá')); ?></td>
                        <td><?php echo e(__('Số lượng')); ?></td>
                        <td><?php echo e(__('Tổng tiền')); ?></td>
                        <td><?php echo e(__('Thời gian')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $i = 0; ?>
                    <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($product[$i]->id); ?></td>
                            <td class="textC"><?php echo e($product[$i]->name); ?></td>
                            <td class="textR red"><?php echo e(number_format($product[$i]->price - $product[$i]->discount)); ?> đ</td>
                            <td class="textC"><?php echo e($row->quantity); ?></td>
                            <td class="textR red"><?php echo e(number_format($row->quantity * ($product[$i]->price - $product[$i]->discount))); ?> đ</td>
                            <td class="textC"><?php echo e($row->created_at); ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="list_action itemActions">
                    <?php if($order->status == "Đang chờ"): ?>
                        <a href="#" class="button blueB order-submit" style="margin-right: 25px">
                            <span><?php echo e(__('Xác nhận đơn hàng')); ?></span>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('order.index')); ?>" class="button basic">
                        <span><?php echo e(__('Quay lại')); ?></span>
                    </a>
                </div>   

            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có đơn đặt hàng nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
    <?php if($order->status == 0): ?>
        <?php echo Form::open(['route' => 'order.confirm_order', 'method' => 'post', 'class' => 'confirm-order']); ?>

        <?php echo Form::hidden('id_order', $order->id); ?>

        <?php echo Form::close(); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>