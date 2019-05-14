<!-- end header -->
<!-- Revslider -->
<?php $__env->startSection('content'); ?>
    <div style="font-family:Tahoma" class="container jtv-home-revslider">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-3 hidden-xs"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jtv-main-home-slider">
                <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
                        <ul>
                            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb="<?php echo e(url(config('app.slideUrl'))); ?>/<?php echo e($row->image_link); ?>">
                                    <img src="<?php echo e(url(config('app.slideUrl'))); ?>/<?php echo e($row->image_link); ?>" alt="slider image1" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat'/>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container -->
    <section style="font-family:Tahoma" class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 main-inner">
                    <div class="col-main">
                        <div class="jtv-featured-products">
                            <div class="slider-items-products">
                                <div class="jtv-new-title">
                                    <h2><?php echo e(__('Sản phẩm tìm thấy')); ?> <?php echo e(count($product)); ?></h2>
                                </div>
                                <div id="featured-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid">
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"><a class="product-image" title="" href="product-detail.html"> <img alt="" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>"> </a>
                                                            <div class="new-label new-top-left">Mới</div>
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
                                                            <div class="item-title">
                                                                <a title="" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <?php for($i = 1;$i < 5;$i++): ?>
                                                                        <?php if($i > round($product_view->averageRating)): ?>
                                                                            <i class="fa fa-star-o"></i>
                                                                        <?php else: ?>
                                                                            <i class="fa fa-star"></i>
                                                                        <?php endif; ?>
                                                                    <?php endfor; ?>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price"><?php echo e(number_format($row->price - $row->discount, null, null, ".")); ?> VNĐ
                                                                            </span>
                                                                        </span>
                                                                        <?php if($row->discount > 0): ?>
                                                                            <p class="old-price">
                                                                                <span class="price-label">Giá bán:</span>
                                                                                <span class="price"> <?php echo e(number_format($row->price, null, null, ".")); ?> VNĐ
                                                                                </span>
                                                                            </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="actions">
                                                                    <div class="add_cart">
                                                                        <button data="<?php echo e($row->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button">
                                                                            <span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
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
                    <!-- Latest Blog -->
                    <div class="jtv-latest-blog">
                        <div class="jtv-new-title">
                            <h2 style="font-family:Arial"><?php echo e(__('Tin tức mới nhất')); ?></h2>
                        </div>
                        <div class="row">
                            <div class="blog-outer-container">
                                <div class="blog-inner">
                                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xs-12 col-sm-6 blog-preview_item">
                                            <div class="entry-thumb jtv-blog-img-hover"><a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>"> <img alt="" src="<?php echo e(url(config('app.newsUrl'))); ?>/<?php echo e($row->avatar); ?>"> </a></div>
                                            <h4 class="blog-preview_title"><a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>"><?php echo e($row->title); ?></a></h4>
                                            <div class="blog-preview_info">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>By <a href="#">admin</a></li>
                                                    <li><i class="fa fa-clock-o"></i><span class="day"><?php echo e(date("d", strtotime($row->created_at))); ?> </span><span class="month"><?php echo e(date("M", strtotime($row->created_at))); ?></span></li>
                                                </ul>
                                                <div class="blog-preview_desc news-content">
                                                    <?php echo $row->content; ?>

                                                </div>
                                                <a style="font-family:Arial" class="read_btn" href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>">Đọc thêm...</a>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Latest Blog -->
                </div>
                <!-- Sidebar -->
                <div class="top-sidebar col-left sidebar col-sm-4 col-xs-12 col-sm-pull-8 col-md-3 col-md-pull-9">
                    <div class="sidebar-banner">
                    <?php echo Form::open(['route' => 'site.home.search_mul', 'method' => 'get']); ?>

                        <div class="form-group div-input">
                            <label><?php echo e(__('Danh mục')); ?></label>
                            <?php echo Form::select('category_id', $cateS, null, ['placeholder' => 'Tất cả danh mục']); ?>

                            <br><br>
                            <label ><?php echo e(__('Mức giá')); ?></label>
                            <?php echo Form::select('price', $priceS, null, ['placeholder' => 'Tất cả mức giá']); ?>

                            <br><br>
                            <label><?php echo e(__('Sắp xếp')); ?></label>
                            <?php echo Form::select('order', $orderS, null); ?>

                            <br><br>
                            <?php echo Form::submit(__('Tìm kiếm nâng cao'), ['class' => 'btn btn-primary search-form']); ?>

                        </div>
                    <?php echo Form::close(); ?>

                    </div>
                    <!-- <div class="sidebar-banner">
                        <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/top-banner.jpg')); ?>" alt="Flash Sale">
                    </div> -->
                    <div class="sidebar-banner"><img src="<?php echo e(asset('source/bower_components/library/site/version4/images/new-arrivals-banner.jpg')); ?>" alt=""></div>
                    <div class="jtv-hot-deal-product">
                        <ul class="products-grid">
                            <li class="right-space two-height item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"><a href="<?php echo e(route('product.view', ['id' => $product_view->id])); ?>" title="" class="product-image"><img src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($product_view->avatar); ?>" alt=""> </a>
                                            <div class="hot-label hot-top-left">Hot View</div>
                                            <div class="mask-shop-white"></div>
                                            <a class="wishlist" value="<?php echo e($product_view->id); ?>" href="<?php echo e(route('site.cart.add_to_wishlist')); ?>">
                                                <div class="mask-left-shop">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </a>
                                            <a class="compare" value="<?php echo e($product_view->id); ?>" href="<?php echo e(route('site.cart.add_to_compare')); ?>">
                                                <div class="mask-right-shop">
                                                    <i class="fa fa-signal"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="" href="<?php echo e(route('product.view', ['id' => $product_view->id])); ?>"><?php echo e($product_view->name); ?></a></div>
                                            <div class="item-content">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price"><?php echo e(number_format($product_view->price - $product_view->discount, null, null, ".")); ?> VNĐ
                                                            </span>
                                                        </span>
                                                        <?php if($product_view->discount > 0): ?>
                                                            <p class="old-price">
                                                                <span class="price-label">Giá bán:</span>
                                                                <span class="price"> <?php echo e(number_format($product_view->price, null, null, ".")); ?> VNĐ</span>
                                                            </p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="add_cart">
                                                        <button data="<?php echo e($product_view->id); ?>" link="<?php echo e(route('site.cart.add')); ?>" class="button btn-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Top Seller Slider -->
                    <div class="jtv-top-products">
                        <div class="slider-items-products">
                            <div class="jtv-new-title">
                                <h2 style="font-family:Arial"><?php echo e(__('Sản phẩm bán chạy')); ?></h2>
                            </div>
                            <div id="top-products-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">
                                    <?php $__currentLoopData = $product_sell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a class="product-image" title="" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"> <img alt="" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->avatar); ?>"> </a>
                                                        <div class="sale-label sale-top-right">Giảm giá</div>
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
                                                        <div class="item-title"><a title="" href="<?php echo e(route('product.view', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a></div>
                                                        <div class="item-content">
                                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></div>
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
                                                                        <span><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
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
                    <!-- End Top Seller Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- Support Policy Box -->
    <div class="container">
        <div class="support-policy-box">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="support-policy"><i class="fa fa-truck"></i>
                        <div class="content"><?php echo e(__('Miễn phí vận chuyển')); ?></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="support-policy"><i class="fa fa-phone"></i>
                        <div class="content"><?php echo e(__('Hỗ trợ: +84393 083 903')); ?></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="support-policy"><i class="fa fa-refresh"></i>
                        <div class="content"><?php echo e(__('30 ngày đổi trả')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Collection Banner -->
    <!-- collection area end -->
    <!-- Brand Logo -->
    <div class="container jtv-brand-logo-block">
        <div class="jtv-brand-logo">
            <div class="slider-items-products">
                <div id="jtv-brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand1.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand2.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand3.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand4.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand5.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand6.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand7.png')); ?>" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/brand8.png')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('source/bower_components/library/site/version4/js/slide-show.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>