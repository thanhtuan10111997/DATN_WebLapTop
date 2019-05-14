
<?php if(Session::has('message1')): ?>
    <div class="alert alert-danger">
        <?php echo e(Session::get('message1')); ?>

    </div>
    <h3>Danh sách các sản phẩm trong giỏ hàng của bạn hiện không tồn tại.</h3>
    <div class="cart-page-area">
        <div class="table-responsive">
            <table class="shop-cart-table">
                <thead>
                <tr>
                    <th class="product-thumbnail ">Hình ảnh</th>
                    <th class="product-name ">Tên sản phẩm</th>
                    <th class="product-unitprice ">Đơn giá</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = Cart::instance("error" . Auth::user()->id)->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="cart_item row-<?php echo e($row->id); ?>">
                        <td class="item-img"><a href="#"><img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->options->avatar); ?>" alt="Product tilte is here "> </a></td>
                        <td class="item-title"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></td>
                        <td class="item-price"><?php echo e(number_format($row->price, null, null, ".")); ?> đ</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>