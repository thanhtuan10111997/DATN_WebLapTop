<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="<?php echo e(route('site.home.index')); ?>" title="Đi đến Trang chủ"><?php echo e(__('Trang Chủ')); ?></a><span>/</span></li>
                        <li><strong><?php echo e($cate->name); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <article class="col-main">
                        <div class="page-title">
                            <h2><?php echo e($cate->name); ?></h2>
                        </div>
                        <?php if(count($cate->products) >0): ?>
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="view-mode"><a class="button-grid" title="Grid" href="">&nbsp;</a><span class="button-active button-list" title="List">&nbsp;</span></div>
                                </div>
                            </div>
                            <div class="category-products list">
                                <ol class="products-list" id="products-list">
                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="item">
                                            <div class="product-image"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>" title=""> <img class="small-image" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>" alt=""> </a>
                                                <div class="new-label new-top-left"><?php echo e(__('New')); ?></div>
                                            </div>
                                            <div class="product-shop">
                                                <h2 class="product-name"><a href="<?php echo e(route('product.view', ['id' => $row->id])); ?>" title=""><?php echo e($row->name); ?></a></h2>
                                                <div class="rating">
                                                    <?php for($i = 1;$i < 6;$i++): ?>
                                                        <?php if($i > round($row->averageRating)): ?>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php else: ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </div>
                                                <div class="desc std" style="height: 7em; overflow: hidden;">
                                                    <p><?php echo $row->descript; ?><p>
                                                </div>
                                                <a class="link-read" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e(__('Đọc thêm...')); ?></a>
                                                <div class="price-box">
                                                    <?php if($row->discount > 0): ?>
                                                        <p class="old-price"><span class="price-label"></span><span class="price"><?php echo e(number_format($row->price, null, null, ".")); ?> VNĐ</span></p>
                                                    <?php endif; ?>
                                                    <p class="special-price"><span class="price-label"></span><span class="price"><?php echo e(number_format($row->price - $row->discount, null, null, ".")); ?> VNĐ</span></p>
                                                </div>
                                                <div class="actions">
                                                    <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" title="Add to Cart" type="button">
                                                        <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                                                    </button>
                                                    <span class="add-to-links">
                                                        <a title="Thêm vào yêu thích" class="button link-wishlist wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                            <i class="fa fa-heart"></i>Thêm vào danh sách yêu thích
                                                        </a>
                                                        <a title="Thêm vào so sánh" class="button link-compare compare" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                            <i class="fa fa-signal"></i>Thêm vào so sánh
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ol>
                            </div>
                            <div class="category-products grid">
                                <ul class="products-grid">
                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img">
                                                        <div class="item-img-info"><a class="product-image" title="" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"> <img alt="" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>"> </a>
                                                            <div class="sale-label sale-top-right">SALE</div>
                                                            <div class="mask-shop-white"></div>
                                                            <a class="wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                                            </a>
                                                            <a class="compare" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                                <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                                            </a>
                                                        </div>
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
                                                                <div class="price-box"><span class="regular-price"> <span class="price"><?php echo e(number_format($row->price - $row->discount, null, null, ".")); ?> VNĐ</span></span>
                                                                    <?php if($row->discount > 0): ?>
                                                                        <p class="old-price"><span class="price-label">Giá bán:</span> <span class="price"> <?php echo e(number_format($row->price, null, null, ".")); ?> VNĐ</span></p>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="add_cart">
                                                                    <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span></button>
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
                        <?php else: ?>
                            <h3><?php echo e(__('Không có sản phẩm nào')); ?></h3>
                        <?php endif; ?>
                        <div class="toolbar bottom">
                        </div>
                </div>
                </article>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.grid').hide();
            $(document).on('click', '.button-grid', function (e) {
                e.preventDefault();
                $('.grid').show();
                $(this).parent().html('<span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="" title="List" class="button-list">&nbsp;</a>');
                $('.list').hide();
            });
            $(document).on('click', '.button-list', function (e) {
                e.preventDefault();
                $('.list').show();
                $(this).parent().html('<a class="button-grid" title="Grid" href="">&nbsp;</a><span class="button-list button-active" title="List">&nbsp;</span>');
                $('.grid').hide();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>