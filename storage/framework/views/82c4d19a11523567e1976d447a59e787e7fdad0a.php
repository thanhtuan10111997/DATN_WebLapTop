<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li style="font-family: Arial" class="home"><a href="<?php echo e(route('site.home.index')); ?>" title="Đi đến Trang chủ"><?php echo e(__('Trang Chủ')); ?></a> <span>/</span></li>
                        <li><a href="<?php echo e(route('site.category.index', ['id' => $product->category->id])); ?>" title="Xem danh mục"><?php echo e($product->category->name); ?></a> <span>/ </span></li>
                        <li><strong><?php echo e($product->name); ?> </strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="container">
            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                            <div class="product-image">
                                <div class="product-full">
                                    <?php if($product->discount > 0): ?>
                                        <div class="sale-label sale-top-right">SALE</div>
                                    <?php else: ?>
                                        <div class="new-label new-top-left">NEW</div>
                                    <?php endif; ?>
                                    <img id="product-zoom" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>" data-zoom-image="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>" alt="product-image"/>
                                </div>
                                <div class="more-views">
                                    <div class="slider-items-products">
                                        <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">
                                            <div class="slider-items slider-width-col4 block-content">
                                                <div class="more-views-items">
                                                    <a href="#" data-image="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>" data-zoom-image="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>">
                                                        <img id="product-zoom" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product->avatar); ?>" alt="product-image"/>
                                                    </a>
                                                </div>
                                                <?php $__currentLoopData = $product->images->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->image_link); ?>" data-zoom-image="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->image_link); ?>">
                                                            <img id="product-zoom" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->image_link); ?>" alt="product-image"/>
                                                        </a>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: more-images -->
                        </div>
                        <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                            <div class="product-name">
                                <h1><?php echo e($product->name); ?></h1>
                            </div>
                            <?php echo Form::open(['route' => 'site.customer.review', 'method' => 'post', 'class' => 'form sub-review']); ?>

                            <div class="rating">
                                <input style="display: none;" id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="<?php echo e(round($product->averageRating)); ?>" data-size="xs">
                                <?php $total = $product->ratings->groupBy('user_id')->count('user_id'); ?>
                                <?php if($total > 0): ?>
                                    <span class="review-no"><?php echo e($total); ?> đánh giá</span>
                                <?php else: ?>
                                    <span style="font-family: Arial" class="review-no"><?php echo e(__('Hãy là người đầu tiên đánh giá sản phẩm.')); ?></span>
                                <?php endif; ?>
                                <input type="hidden" name="id" required value="<?php echo e($product->id); ?>">
                                <br/>
                                <button id="reviews" class="btn btn-success"><?php echo e(__('GỬI ĐÁNH GIÁ')); ?>

                                </button>
                            </div>
                            <?php echo Form::close(); ?>

                            <div class="price-block">
                                <div class="price-box">
                                    <div>
                                        <h4 class="prices"><?php echo e(__('Giá bán:')); ?></h4>
                                    </div>
                                    <p class="special-price">
                                        <span class="price-label">Giá đặc biệt:</span>
                                        <span class="price"> <?php echo e(number_format($product->price - $product->discount, null, null, ".")); ?> VNĐ</span>
                                    </p>
                                    <?php if($product->discount > 0): ?>
                                        <p class="old-price">
                                            <span class="price-label">Giá bán:</span>
                                            <span class="price"> <?php echo e(number_format($product->price, null, null, ".")); ?> VNĐ</span>
                                        </p>
                                    <?php endif; ?>
                                    <p style="font-style:italic; font-family:Arial; font-size:12pt">(Đã bao gồm thuế VAT)</p>
                                    <p style="font-family: Arial; font-size:14pt; font-weight:bold">
                                        <?php echo $product->quantities; ?> sản phẩm
                                    </p>
                                    <?php
                                        $cart = Cart::instance(auth()->id());
                                        $data = $cart->search(function ($cartItem) use ($product) {
                                            return $cartItem->id == $product->id;
                                        })->first();
                                    ?>
                                    <?php if($data): ?> 
                                        <?php if($data->qty < $product->quantities): ?>
                                            <p class="availability in-stock">
                                                <span><?php echo e(__('Còn hàng')); ?></span>
                                            </p>
                                        <?php else: ?> 
                                            <p class="availability in-stock">
                                                <span><?php echo e(__('Hết hàng')); ?></span>
                                            </p>
                                        <?php endif; ?>
                                    <?php else: ?>
                                         <p class="availability in-stock">
                                            <span><?php echo e(__('Còn hàng')); ?></span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="add-to-box" style="width: 99%">
                                <div class="add-to-cart">
                                    <div class="pull-left">
                                        <div class="custom pull-left">
                                            <label style="font-family:Arial"><?php echo e(__('Số lượng:')); ?></label>
                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                            <input type="text" onkeypress="validate(event)" class="input-text qty" title="Số lượng" value="1" maxlength="1" max="5" id="qty" name="qty" required>
                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                        </div>
                                    </div>
                                    <button data="<?php echo e($product->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart multiple" title="Thêm vào giỏ hàng" type="button">
                                        <i class="fa fa-shopping-cart"></i> <?php echo e(__('Thêm vào giỏ hàng')); ?>

                                    </button>
                                </div>
                                <div class="email-addto-box">
                                    <ul class="add-to-links">
                                        <li>
                                            <a class="link-wishlist wishlist" value="<?php echo e($product->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>"><i class="fa fa-heart"></i>
                                                <span><?php echo e(__('Thêm vào yêu thích')); ?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="link-compare compare" value="<?php echo e($product->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>"><i class="fa fa-signal"></i>
                                                <span><?php echo e(__('Thêm vào so sánh')); ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-next-prev"><a class="product-next" href="#"><i class="fa fa-angle-left"></i></a> <a class="product-prev" href="#"><i class="fa fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active"><a href="#product_tabs_description" data-toggle="tab"><?php echo e(__('Mô tả')); ?></a></li>
                        <li><a href="#product_tabs_tags" data-toggle="tab"><?php echo e(__('Thông số kỹ thuật')); ?></a></li>
                        <li><a href="#product_tabs_comment" data-toggle="tab"><?php echo e(__('Bình luận')); ?></a></li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div style="font-family: Arial" class="std">
                                <?php echo $product->descript; ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="product_tabs_tags">
                            <div class="box-collateral box-tags">
                                <div class="tags">
                                    <form id="addTagForm" action="#" method="get">
                                        <div class="form-add-tags">
                                            <table class="table table-condensed" style="width: 50%;">
                                                <tbody style="font-family: Arial">
                                                <tr>
                                                    <th class="col-lg-1 table-product"><?php echo e(__('Màn hình:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->screen); ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-2 table-product"><?php echo e(__('Hệ điều hành:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->os); ?></td>

                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product"><?php echo e(__('CPU:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->front_camera); ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product"><?php echo e(__('Card màn hình:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->back_camera); ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">
                                                    <?php echo e(__('RAM:')); ?></td>
                                                    <td class="col-lg-5 table-product">
                                                    <?php echo e($product->configuration->ram); ?></th>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product"><?php echo e(__('Ổ cứng:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->memory); ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product"><?php echo e(__('Cổng kết nối:')); ?></th>
                                                    <td class="col-lg-5 table-product"><?php echo e($product->configuration->battery_capacity); ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="product_tabs_comment">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <br/>
                                            <h4><?php echo e(__('Thêm nhận xét')); ?></h4>
                                            <div>
                                                <div class="form-group">
                                                    <textarea type="text" rows="5" name="comment_body" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input id="add-comment" type="submit" post="<?php echo e($product->id); ?>" class="btn btn-warning" value="ĐĂNG"/>
                                                </div>
                                            </div>
                                            <?php if($product->comments->count() > 0): ?>
                                                <div style="font-family: Arial" class="title"><h4><?php echo e(count($product->comments)); ?> <?php echo e(__('Nhận xét và đánh giá')); ?> </h4></div>
                                            <?php else: ?>
                                                <div style="font-family: Arial" class="title"><h5>Hãy là người đầu tiên bình luận sản phẩm</h5></div>
                                            <?php endif; ?>
                                            <?php echo $__env->make('site.product.reply', ['comments' => $product->comments()->latest()->get(), 'product_id' => $product->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
    <!-- Related Products Slider -->
    <div class="container">
        <div class="jtv-related-products">
            <div class="slider-items-products">
                <div class="jtv-new-title">
                    <h2 style="font-family:Arial"><?php echo e(__('Sản phẩm cùng loại')); ?></h2>
                </div>
                <div class="related-block">
                    <div id="jtv-related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            <?php $__currentLoopData = $product_relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a class="product-image" title="Xem chi tiết sản phẩm" href="product-detail.html">
                                                    <img alt="" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>">
                                                </a>
                                                <div class="new-label new-top-left">NEW</div>
                                                <div class="mask-shop-white"></div>
                                                <a class="wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                    <div class="mask-left-shop">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </a>
                                                <a class="compare" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                    <div class="mask-right-shop">
                                                        <i class="fa fa-signal"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="Xem chi tiết sản phẩm" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></div>
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
                                                            <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button">
                                                                <span>
                                                                    <i class="fa fa-shopping-cart"></i> <?php echo e(__('Thêm vào giỏ hàng')); ?>

                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Slider End -->
    <!-- Upsell Product Slider -->
    <div class="container">
        <div class="jtv-upsell-products">
            <div class="slider-items-products">
                <div class="jtv-new-title">
                    <h2 style="font-family: Arial"><?php echo e(__('Sản phẩm bán chạy')); ?></h2>
                </div>
                <div class="upsell-block">
                    <div id="jtv-upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            <?php $__currentLoopData = $product_sell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a class="product-image" title="Xem chi tiết sản phẩm" href="product-detail.html">
                                                    <img alt="" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>">
                                                </a>
                                                <div class="new-label new-top-left">NEW</div>
                                                <div class="mask-shop-white"></div>
                                                <a class="wishlist" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                    <div class="mask-left-shop">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </a>
                                                <a class="compare" value="<?php echo e($row->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                    <div class="mask-right-shop">
                                                        <i class="fa fa-signal"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="Xem chi tiết sản phẩm" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></div>
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
                                                            <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button">
                                                                <span>
                                                                    <i class="fa fa-shopping-cart"></i> <?php echo e(__('Thêm vào giỏ hàng')); ?>

                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Upsell  Slider -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/site/version4/js/validate-price.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/site/version4/js/add-comment.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>