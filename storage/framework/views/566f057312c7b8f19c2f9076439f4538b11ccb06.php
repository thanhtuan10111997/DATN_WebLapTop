<?php $__env->startSection('content'); ?>
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="compare-list">
                <h2 style="font-family:Arial">Đánh giá sản phẩm</h2>
                <div class="compare-area">
                    <div class="container">
                        <div class="row">
                            <div class="category-products col-lg-offset-3">
                                <ul class="products-grid">
                                    <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image" title="Đánh giá sản phẩm" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"> <img alt="Đánh giá sản phẩm" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->options->avatar); ?>"> </a>
                                                        <div class="new-label new-top-left">NEW</div>
                                                        <div class="sale-label sale-top-right">SALE</div>
                                                        <div class="mask-shop-white"></div>
                                                        <a class="wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                            <div class="mask-left-shop">
                                                                <i class="fa fa-heart"></i>
                                                            </div>
                                                        </a>
                                                        <a class="delete-compare" href="<?php echo e(route('site.cart.delete_product_compare', ['id' => $row->id])); ?>">
                                                            <div class="mask-right-shop">
                                                                <i class="glyphicon glyphicon-trash"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></div>
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
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price"><?php echo e(number_format($row->price, null, null, ".")); ?> VNĐ
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="add_cart">
                                                                    <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" title="Thêm Vào Giỏ Hàng" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php if($compare_sl < 2): ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <!-- single product start-->
                                        <div class="upload-prodcut text-center">
                                            <div class="upload-box">
                                                <a href="<?php echo e(route('site.home.index')); ?>"> <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/compate.png')); ?>" alt=""></a>
                                                <p style="font-family:Arial">Thêm sản phẩm</p>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>
                                <?php endif; ?>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div><h3 style="font-family:Arial" class="text-center">THÔNG SỐ KỸ THUẬT</h3></div>
                            <div class="table-responsive cart-area">
                                <table class="shop_table cart table text-center">
                                    <tbody>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('Màn hình:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['screen']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('Hệ điều hành:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['os']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('Card màn hình:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['back_camera']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('CPU:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['front_camera']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('RAM:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['ram']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('Ổ cứng:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['memory']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    <tr class="cart_item">
                                        <td style="font-family:Arial" class="item-quality"><?php echo e(__('Cổng kết nối:')); ?></td>
                                        <?php $__currentLoopData = $compare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="item-des"><?php echo e($row->options->configuration['battery_capacity']); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>