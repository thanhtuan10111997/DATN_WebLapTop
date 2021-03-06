<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlfabulous.justthemevalley.com/version4/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 19:34:55 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <meta name="description" content="Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.">
    <meta name="keywords" content="HTML,CSS,womens clothes,fashion,mens fashion,fashion show,fashion week">
    <meta name="author" content="JTV">
    <title><?php echo e(__('Cửa hàng Thanh Tuấn')); ?></title>
    <!-- Favicons Icon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="<?php echo e(asset('')); ?>">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/site/version4/css/styles.css')); ?>" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/site/version4/css/toastr.min.css')); ?>" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/site/version4/css/star-rating.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/select2.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/jquery-confirm.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/crown/css/jquery.dataTables.min.css')); ?>"/>
</head>
<body class="product-page">
<!-- Mobile Menu -->
<div style="font-family:Arial" id="jtv-mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <?php echo Form::open(['route' => 'site.home.search', 'method' => 'get', 'id' => 'mob-search']); ?>

                    <div class="input-group">
                        <div class="input-group-btn">
                            <?php echo Form::text('key', null, ['class' => 'form-control simple', 'placeholder' => 'Bạn muốn tìm gì...', 'id' => 'srch-term', 'autocomplete' => 'off']); ?>

                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                <?php echo Form::close(); ?>

            </div>
        </li>
        <?php $__currentLoopData = $categoryS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($row->parent_id == 0 && count($row->subCategory) > 0): ?>
                <li>
                    <a href="#"><?php echo e($row->name); ?></a>
                    <ul>
                        <?php $__currentLoopData = $row->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('site.category.index', ['id' => $value->id])); ?>"><?php echo e($value->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php elseif($row->parent_id == 0): ?>
                <li>
                    <a href="<?php echo e(route('site.category.index', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li class="nosub">
            <a style="font-family:Arial" href="<?php echo e(route('site.news.index')); ?>"><?php echo e(__('tin tức')); ?></a>
        </li>
        <li class="nosub">
            <a style="font-family:Arial" href="<?php echo e(route('site.news.index')); ?>"><?php echo e(__('giới thiệu')); ?></a>
        </li>
        <li class="nosub">
            <a style="font-family:Arial" href="<?php echo e(route('site.contact.index')); ?>"><?php echo e(__('liên hệ')); ?></a>
        </li>
    </ul>
    <div class="top-links">
        <ul class="links">
            <?php if(Auth::check()): ?>
                <li>
                    <a title="Tài khoản của tôi" href="<?php echo e(route('site.customer.edit', ['customer' => Auth::user()->id])); ?>"><?php echo e(Auth::user()->name); ?></a>
                </li>
                <li>
                    <a title="Danh sách yêu thích của tôi" href="<?php echo e(route('site.cart.view_to_wishlist')); ?>">Danh sách yêu thích
                        <span class="wl_sl" class="badge"><?php echo e($wl_sl > 0 ? $wl_sl : ""); ?></span></a>
                </li>
                <li><a title="Checkout" href="<?php echo e(route('site.cart.checkout')); ?>">Kiểm tra đặt hàng</a></li>
                <li><a title="Đăng xuất" href="<?php echo e(route('site.customer.logout')); ?>">Đăng xuất</a></li>
            <?php else: ?>
                <li><a title="Đăng ký" href="<?php echo e(route('site.customer.regester')); ?>">Đăng ký</a></li>
                <li><a title="Đăng nhập" href="<?php echo e(route('site.customer.login')); ?>">Đăng nhập</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div id="page">
    <!-- Header -->
    <header>
        <div style="font-family:Arial" class="header-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <!-- Header Logo -->
                        <div class="logo"><a title="Trang chủ" href="<?php echo e(route('site.home.index')); ?>"><img alt="Laptop Thanh Tuấn" src="<?php echo e(asset('source/bower_components/library/site/version4/images/logo.png')); ?>"></a></div>
                        <!-- End Header Logo -->
                        <div class="nav-icon">
                            <div class="mega-container visible-lg visible-md visible-sm">
                                <div class="navleft-container">
                                    <div class="mega-menu-title">
                                        <h3 style="font-weight:bold;"><i class="fa fa-navicon"></i><?php echo e(__('Danh mục')); ?></h3>
                                    </div>
                                    <div class="mega-menu-category">
                                        <ul class="nav">
                                            <?php $__currentLoopData = $categoryS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($row->parent_id == 0 && count($row->subCategory) > 0): ?>
                                                    <li>
                                                        <a href="#"><?php echo e($row->name); ?></a>
                                                        <div class="wrap-popup column1">
                                                            <div class="popup">
                                                                <ul class="nav">
                                                                    <?php $__currentLoopData = $row->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a href="<?php echo e(route('site.category.index', ['id' => $value->id])); ?>"><?php echo e($value->name); ?></a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php elseif($row->parent_id == 0): ?>
                                                    <li class="nosub">
                                                        <a href="<?php echo e(route('site.category.index', ['id' => $row->id])); ?>"><?php echo e($row->name); ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nosub">
                                                <a style="font-family:Arial" href="<?php echo e(route('site.news.index')); ?>"><?php echo e(__('tin tức')); ?></a>
                                            </li>
                                            <li class="nosub">
                                                <a style="font-family:Arial" href="<?php echo e(route('site.about.index')); ?>"><?php echo e(__('giới thiệu')); ?></a>
                                            </li>
                                            <li class="nosub">
                                                <a style="font-family:Arial" href="<?php echo e(route('site.contact.index')); ?>"><?php echo e(__('liên hệ')); ?></a>
                                            </li>
                                        </ul>
                                        <div class="side-banner">
                                            <img src="<?php echo e(asset('source/bower_components/library/site/version4/images/top-banner.jpg')); ?>" alt="Flash Sale" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
                        <div class="jtv-mob-toggle-wrap">
                            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
                        </div>
                        <div class="jtv-header-box">
                            <div class="search_cart_block">
                                <div class="search-box hidden-xs">
                                    <?php echo Form::open(['route' => 'site.home.search', 'method' => 'get']); ?>

                                    <?php echo Form::select('category_id', $cateS, null, ['placeholder' => 'Tất cả danh mục', 'class' => 'cate-dropdown hidden-xs hidden-sm hidden-md cate-s']); ?>

                                    <?php echo Form::text('key', null, ['class' => 'searchbox search', 'placeholder' => 'Bạn muốn tìm gì...', 'id' => 'search', 'autocomplete' => 'off']); ?>

                                    <button type="submit" title="Tìm kiếm" class="search-btn-bg" id="submit-button">
                                        <span class="hidden-sm">Tìm kiếm</span>
                                        <i class="fa fa-search hidden-xs hidden-lg hidden-md"></i>
                                    </button>
                                    <?php echo Form::close(); ?>

                                </div>
                                <div class="right_menu">
                                    <div class="menu_top">
                                        <div class="top-cart-contain pull-right" style="margin-left: 15px">
                                            <div class="mini-cart">
                                                <div class="basket"><a class="basket-icon" href="<?php echo e(route('site.cart.view_to_compare')); ?>"><i class="fa fa-balance-scale"></i>SO SÁNH<span class="badge" id="so-luong"><?php echo e($compare_sl > 0 ? $compare_sl : ""); ?></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-cart-contain pull-right">
                                            <div class="mini-cart" id="cart-content">
                                                <div class="basket"><a class="basket-icon"><i class="fa fa-shopping-basket"></i>GIỎ HÀNG<span class="badge"><?php echo e(count($cart_init) > 0 ? count($cart_init) : ""); ?></span></a>
                                                    <div class="top-cart-content">
                                                        <?php if(count($cart_init) > 0): ?>
                                                            <div class="block-subtitle">
                                                                <div class="top-subtotal"><?php echo e(count($cart_init)); ?> Sản phẩm, <span class="price"><?php echo e($amount); ?> đ</span></div>
                                                            </div>
                                                            <ul class="mini-products-list" id="cart-sidebar">
                                                                <?php $__currentLoopData = $cart_init; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="item">
                                                                        <div class="item-inner"><a class="product-image" title="" href="<?php echo e(route('product.view', ['id' => $row->id ])); ?>"><img alt="product tilte is here" src="<?php echo e(url(config('app.imageUrl'))); ?>/<?php echo e($row->options->avatar); ?>"></a>
                                                                            <div class="product-details">
                                                                                <p class="product-name"><a href="<?php echo e(route('product.view', ['id' => $row->id ])); ?>"><?php echo e($row->name); ?></a></p>
                                                                                <strong><?php echo e($row->qty); ?></strong> x <span class="price"><?php echo e(number_format($row->price, null, null, '.')); ?> đ</span></div>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                            <div class="actions">
                                                                <a href="<?php echo e(route('site.cart.view')); ?>" class="view-cart"><span>VIEW CART</span></a>
                                                                <button class="btn-checkout" title="Checkout" type="button"><span>CHECKOUT</span></button>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top_section hidden-xs">
                                <div class="toplinks">
                                    <?php if(Auth::check() && Auth::user()->level == 1): ?>
                                        <div class="site-dir hidden-xs">
                                            <a target="_blank" href="<?php echo e(route('home.index')); ?>"><i class="fa fa-user-o"></i> <?php echo e(__('Truy cập trang quản trị')); ?></a>
                                        </div>
                                    <?php else: ?>
                                        <div class="site-dir hidden-xs">
                                            <a class="hidden-sm">
                                                <i class="fa fa-phone"></i> <strong>Hỗ trợ: </strong>0393 083 903
                                            </a>
                                            <a href="mailto:support@example.com"><i class="fa fa-envelope"></i>ngothanhtuan@gmail.com</a>
                                        </div>
                                    <?php endif; ?>
                                    <ul class="links">
                                        <?php if(Auth::check()): ?>
                                            <li>
                                                <a title="Tài khoản của tôi" href="<?php echo e(route('site.customer.edit', ['customer' => Auth::user()->id])); ?>"><?php echo e(Auth::user()->name); ?></a>
                                            </li>
                                            <li>
                                                <a title="Danh sách yêu thích" href="<?php echo e(route('site.cart.view_to_wishlist')); ?>">♥Yêu thích
                                                    <span class="wl_sl" class="badge"><?php echo e($wl_sl > 0 ? $wl_sl : ""); ?></span>
                                                </a>
                                            </li>
                                            <
                                            <li><a title="Checkout" href="<?php echo e(route('site.cart.checkout')); ?>">Checkout</a></li>
                                            <li>
                                                <a title="Lịch sử đặt hàng" href="<?php echo e(route('site.customer.history')); ?>">Lịch sử</a>
                                            </li>
                                            <li>
                                                <a title="Đăng xuất" href="<?php echo e(route('site.customer.logout')); ?>">Đăng xuất</a>
                                            </li>
                                        <?php else: ?>
                                            <li><a title="Đăng ký" href="<?php echo e(route('site.customer.regester')); ?>">Đăng ký</a></li>
                                            <li><a title="Đăng nhập" href="<?php echo e(route('site.customer.login')); ?>">Đăng nhập</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>