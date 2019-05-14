<?php $__env->startSection('content'); ?>
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <section class="col-sm-12 col-xs-12">
                    <div class="cart-page-area">
                        <h2>Danh sách yêu thích của tôi</h2>
                        <form method="post" action="#">
                            <div class="table-responsive">
                                <table class="shop-cart-table data-cart">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail ">Hình ảnh</th>
                                        <th class="product-name ">Tên sản phẩm</th>
                                        <th class="product-price ">Đơn giá</th>
                                        <th class="product-subtotal ">Tình trạng</th>
                                        <th class="product-quantity">Thêm sản phẩm</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $wishList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="cart_item">
                                            <td class="item-img">
                                                <a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>">
                                                    <img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->options->avatar); ?>">
                                                </a>
                                            </td>
                                            <td class="item-title"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></td>
                                            <td class="item-price"> <?php echo e(number_format($row->price, null, null, ",")); ?> đ</td>
                                            <td class="item-qty">Còn hàng</td>
                                            <td class="total-price">
                                                <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button">
                                                    <span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
                                                </button>
                                            </td>
                                            <td class="remove-item">
                                                <a class="wishlist-remove" value="<?php echo e($row->rowId); ?>" href="" link="<?php echo e(route('site.cart.delete_product_wishlist')); ?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>