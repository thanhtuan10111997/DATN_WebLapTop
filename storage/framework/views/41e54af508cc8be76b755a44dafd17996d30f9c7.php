<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"><a href="<?php echo e(route('site.home.index')); ?>" title="Go to Home Page"><?php echo e(__('Trang chủ')); ?></a> <span>/</span></li>
                        <li><strong><?php echo e(__('Checkout')); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- main-container -->
    <div class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-area">
                        <div class="title-tab-product-category">
                            <div class="text-center">
                                <ul class="nav jtv-heading-style" role="tablist">
                                    <li role="presentation" class=""><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab"><?php echo e(__('1 Shopping cart')); ?></a></li>
                                    <li role="presentation"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab"><?php echo e(__('2 Check Imfomation')); ?></a></li>
                                    <li role="presentation" class="active"><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab"><?php echo e(__('3 Checkout')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in" id="cart">
                                    <!-- cart are start-->
                                    <h3>Danh sách đơn hàng hiện tại của bạn</h3>
                                    <div class="cart-page-area">
                                        <form method="post" action="<?php echo e(route('site.cart.update')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="table-responsive">
                                                <table class="shop-cart-table data-cart">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-thumbnail ">Image</th>
                                                        <th class="product-name ">Product Name</th>
                                                        <th class="product-unitprice ">Unit Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal ">Total</th>
                                                        <th class="product-remove">Remove</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="cart_item row-<?php echo e($row->id); ?>">
                                                            <td class="item-img"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->options->avatar); ?>" alt="Product tilte is here "> </a></td>
                                                            <td style="width: 450px" class="item-title"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></td>
                                                            <td class="item-price"><?php echo e(number_format($row->price, null, null, ".")); ?> đ</td>
                                                            <td class="item-qty">
                                                                <div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-quantity">
                                                                            <div class="cart-plus-minus">
                                                                                <input onkeypress="validate(event)" min="1" value="<?php echo e($row->qty); ?>" name="qty[]" class="cart-plus-minus-box" type="number" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="total-price"><strong><?php echo e(number_format($row->qty * $row->price, null, null, ".")); ?> đ</strong></td>
                                                            <td class="remove-item">
                                                                <a data="<?php echo e($row->rowId); ?>" value="<?php echo e($row->id); ?>" class="delete" href="" link="<?php echo e(route('site.cart.delete')); ?>">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="cart-bottom-area">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                                        <div class="update-coupne-area">
                                                            <div class="update-continue-btn text-right">
                                                                <button class="button btn-continue" title="Continue Shopping" type="button"><span><?php echo e(__('Continue Shopping')); ?></span></button>
                                                                <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><?php echo e(__('Update Cart')); ?></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-5 col-xs-12">
                                                        <div class="cart-total-area">
                                                            <div class="catagory-title cat-tit-5 text-right">
                                                                <h3>Cart Totals</h3>
                                                            </div>
                                                            <div class="sub-shipping">
                                                                <p>Subtotal <span><?php echo e($total); ?> đ</span></p>
                                                            </div>
                                                            <div class="shipping-method text-right">
                                                                <p><a href="#">Calculate Shipping</a></p>
                                                            </div>
                                                            <div class="process-cart-total">
                                                                <p>Total <span><?php echo e($total); ?> đ</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- cart are end-->
                                </div>
                                <div role="tabpanel" class="tab-pane  fade in" id="checkout">
                                    <!-- Checkout are start-->
                                    <div class="checkout-area">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="coupne-customer-area mb50">
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="billing-details">
                                                                <div class="contact-text right-side">
                                                                    <h2><?php echo e(__('Thông tin cơ bản')); ?></h2>
                                                                    <form action="#">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label><?php echo e(__('Tên khách hàng')); ?></label>
                                                                                    <?php echo Form::text('name', Auth::user()->name, ['disabled', 'required', 'class' => 'info']); ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Email Address<em>*</em></label>
                                                                                    <?php echo Form::email('email', Auth::user()->email, ['disabled', 'required', 'class' => 'info']); ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Phone Number<em>*</em></label>
                                                                                    <?php echo Form::text('phone', Auth::user()->phone, ['disabled', 'required', 'autocomplete' => 'off', 'class' => 'info']); ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label><?php echo e(__('Địa chỉ')); ?><em>*</em></label>
                                                                                    <?php echo Form::text('address_id',Auth::user()->address->address, ['disabled', 'class' => 'selectpicker select-custom']); ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <p>
                                                                                    <a style="color: red" href="<?php echo e(route('site.customer.edit', ['id' => Auth::user()->id])); ?>"><?php echo e(__('Chỉnh sửa thông tin')); ?></a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkout are end-->
                                </div>

                                <div role="tabpanel" class="tab-pane  fade in active" id="complete-order">
                                    <?php echo Form::open(['route' => 'site.order.add', 'method' => 'post', 'id' => 'form-checkout', 'class' => 'form']); ?>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="checkout-payment-area">
                                                <div class="checkout-total">
                                                    <h3>Your order</h3>
                                                    <form action="#" method="post">
                                                        <div class="table-responsive">
                                                            <table class="checkout-area table">
                                                                <thead>
                                                                <tr class="cart_item check-heading">
                                                                    <td class="ctg-type"> Product</td>
                                                                    <td class="cgt-des"> Total</td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr class="cart_item check-item prd-name">
                                                                        <td class="ctg-type"> <?php echo e($row->name); ?> × <span><?php echo e($row->qty); ?></span></td>
                                                                        <td class="cgt-des"> <?php echo e(number_format($row->subtotal)); ?> đ</td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <tr class="cart_item">
                                                                    <td class="ctg-type"> Subtotal</td>
                                                                    <td class="cgt-des"><?php echo e($total); ?> đ</td>
                                                                </tr>
                                                                <tr class="cart_item">
                                                                    <td class="ctg-type crt-total"> Total</td>
                                                                    <td class="cgt-des prc-total"><?php echo e($total); ?> đ</td>
                                                                </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <td>
                                                                        <p><?php echo e(__('Địa chỉ giao hàng')); ?><em>*</em></p>
                                                                        <?php echo Form::text('address_ship', old('address_ship'), ['required', 'class' => 'input-text required-entry', 'style' => 'width: 400px']); ?>

                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><?php echo e(__('Ghi chú')); ?></p>
                                                                        <?php echo Form::textarea('note', old('note'), ['autocomplete' => 'off', 'id' => 'content']); ?>

                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="payment-section">
                                                    <div class="pay-toggle">
                                                        <p><?php echo e(__('Phương thức thanh toán')); ?></p>
                                                        <div class="pay-type">
                                                            <?php echo Form::radio('payment', 0); ?>

                                                            <label for="pay-toggle01"><?php echo e(__('Direct Bank Transfer')); ?></label>
                                                        </div>
                                                        <div class="pay-type">
                                                            <?php echo Form::radio('payment', 1, true); ?>

                                                            <label for="pay-toggle03"><?php echo e(__('Cash on Delivery')); ?></label>
                                                        </div>
                                                        <div class="input-box">
                                                            <?php echo e(Form::submit(__('Place order'), ['class' => 'button login submit-order'])); ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo Form::close(); ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="jtv-crosssel-pro">
                <div class="jtv-new-title">
                    <h2>you may be interested</h2>
                </div>
                <div class="category-products">
                    <ul class="products-grid">
                        <?php $__currentLoopData = $product_segest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"> <img alt="Product tilte is here" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>"> </a>
                                            <div class="mask-shop-white"></div>
                                            <a class="wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                            </a>
                                            <a class="compare" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product tilte is here" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <?php for($i = 1;$i < 6;$i++): ?>
                                                        <?php if($i > round($row->averageRating)): ?>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php else: ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"> <span class="price"><?php echo e(number_format($row->price - $row->discount, null, null, ".")); ?> VNĐ</span></span>
                                                        <?php if($row->discount > 0): ?>
                                                            <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price"> <?php echo e(number_format($row->price, null, null, ".")); ?> VNĐ</span></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="add_cart">
                                                        <button link="<?php echo e(route('site.cart.add_to_cart', ['id' => $row->id])); ?>" class="button btn-cart add-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function validate(e) {
            var ev = e || window.event;
            var key = ev.keyCode || ev.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]/;
            if (!regex.test(key)) {
                ev.returnValue = false;
                if (ev.preventDefault)
                    ev.preventDefault();
            }
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>