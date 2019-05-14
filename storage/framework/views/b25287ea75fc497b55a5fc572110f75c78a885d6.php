<div class="cart-page-area">
    <?php if(count($orderDetails) > 0): ?>
        <h4><?php echo e(__('Danh sách các sản phẩm trong đơn hàng của bạn')); ?></h4>
        <div class="table-responsive">
            <table class="shop-cart-table data-cart">
                <thead>
                <tr>
                    <th class="product-thumbnail"><?php echo e(__('Mã sản phẩm')); ?></th>
                    <th class="product-name"><?php echo e(__('Tên sản phẩm')); ?></th>
                    <th class="product-price" style="width: 90px"><?php echo e(__('Đơn giá')); ?></th>
                    <th class="product-subtotal"><?php echo e(__('Số lượng')); ?></th>
                    <th class="product-subtotal" style="width: 90px"><?php echo e(__('Thành tiền')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="cart_item">
                        <td class="item-title">
                            <?php echo e($product[$i]->id); ?>

                        </td>
                        <td class="item-title">
                            <?php echo e($product[$i]->name); ?>

                        </td>
                        <?php $price = $product[$i]->price - $product[$i]->discount; ?>
                        <td class="item-price"> 
                            <?php echo e(number_format($price, null, null, ",")); ?> đ
                        </td>
                        <td class="item-qty"><?php echo e($row->quantity); ?></td>
                        <td class="item-price"> 
                            <?php echo e(number_format($price * $row->quantity, null, null, ",")); ?> đ
                        </td> 
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
    <?php endif; ?>
</div>
         