@extends('site.layout')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li style="font-family: Arial" class="home"><a href="{{ route('site.home.index') }}" title="Đi đến Trang chủ">{{ __('Trang Chủ') }}</a> <span>/</span></li>
                        <li><a href="{{ route('site.category.index', ['id' => $product->category->id]) }}" title="Xem danh mục">{{ $product->category->name }}</a> <span>/ </span></li>
                        <li><strong>{{ $product->name }} </strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="container">
            @include('site.message')
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                            <div class="product-image">
                                <div class="product-full">
                                    @if($product->discount > 0)
                                        <div class="sale-label sale-top-right">SALE</div>
                                    @else
                                        <div class="new-label new-top-left">NEW</div>
                                    @endif
                                    <img id="product-zoom" src="{{ url(config('app.imageUrl')) }}/{{ $product->avatar }}" data-zoom-image="{{ url(config('app.imageUrl')) }}/{{ $product->avatar }}" alt="product-image"/>
                                </div>
                                <div class="more-views">
                                    <div class="slider-items-products">
                                        <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">
                                            <div class="slider-items slider-width-col4 block-content">
                                                <div class="more-views-items">
                                                    <a href="#" data-image="{{ url(config('app.imageUrl')) }}/{{ $product->avatar }}" data-zoom-image="{{ url(config('app.imageUrl')) }}/{{ $product->avatar }}">
                                                        <img id="product-zoom" src="{{ url(config('app.imageUrl')) }}/{{ $product->avatar }}" alt="product-image"/>
                                                    </a>
                                                </div>
                                                @foreach($product->images->take(3) as $row)
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="{{ url(config('app.imageUrl')) }}/{{ $row->image_link }}" data-zoom-image="{{ url(config('app.imageUrl')) }}/{{ $row->image_link }}">
                                                            <img id="product-zoom" src="{{ url(config('app.imageUrl')) }}/{{ $row->image_link }}" alt="product-image"/>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: more-images -->
                        </div>
                        <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                            <div class="product-name">
                                <h1>{{ $product->name }}</h1>
                            </div>
                            {!! Form::open(['route' => 'site.customer.review', 'method' => 'post', 'class' => 'form sub-review']) !!}
                            <div class="rating">
                                <input style="display: none;" id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ round($product->averageRating) }}" data-size="xs">
                                @php $total = $product->ratings->groupBy('user_id')->count('user_id'); @endphp
                                @if($total > 0)
                                    <span class="review-no">{{ $total }} đánh giá</span>
                                @else
                                    <span style="font-family: Arial" class="review-no">{{ __('Hãy là người đầu tiên đánh giá sản phẩm.') }}</span>
                                @endif
                                <input type="hidden" name="id" required value="{{ $product->id }}">
                                <br/>
                                <button id="reviews" class="btn btn-success">{{ __('GỬI ĐÁNH GIÁ') }}
                                </button>
                            </div>
                            {!! Form::close() !!}
                            <div class="price-block">
                                <div class="price-box">
                                    <div>
                                        <h4 class="prices">{{ __('Giá bán:') }}</h4>
                                    </div>
                                    <p class="special-price">
                                        <span class="price-label">Giá đặc biệt:</span>
                                        <span class="price"> {{ number_format($product->price - $product->discount, null, null, ".") }} VNĐ</span>
                                    </p>
                                    @if($product->discount > 0)
                                        <p class="old-price">
                                            <span class="price-label">Giá bán:</span>
                                            <span class="price"> {{ number_format($product->price, null, null, ".") }} VNĐ</span>
                                        </p>
                                    @endif
                                    <p style="font-style:italic; font-family:Arial; font-size:12pt">(Đã bao gồm thuế VAT)</p>
                                    <p style="font-family: Arial; font-size:14pt; font-weight:bold">
                                        {!! $product->quantities !!} sản phẩm
                                    </p>
                                    @php
                                        $cart = Cart::instance(auth()->id());
                                        $data = $cart->search(function ($cartItem) use ($product) {
                                            return $cartItem->id == $product->id;
                                        })->first();
                                    @endphp
                                    @if ($data) 
                                        @if ($data->qty < $product->quantities)
                                            <p class="availability in-stock">
                                                <span>{{ __('Còn hàng') }}</span>
                                            </p>
                                        @else 
                                            <p class="availability in-stock">
                                                <span>{{ __('Hết hàng') }}</span>
                                            </p>
                                        @endif
                                    @else
                                         <p class="availability in-stock">
                                            <span>{{ __('Còn hàng') }}</span>
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="add-to-box" style="width: 99%">
                                <div class="add-to-cart">
                                    <div class="pull-left">
                                        <div class="custom pull-left">
                                            <label style="font-family:Arial">{{ __('Số lượng:') }}</label>
                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                            <input type="text" onkeypress="validate(event)" class="input-text qty" title="Số lượng" value="1" maxlength="1" max="5" id="qty" name="qty" required>
                                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                        </div>
                                    </div>
                                    <button data="{{ $product->id }}" link="{{ route('site.cart.add') }}" class="button btn-cart multiple" title="Thêm vào giỏ hàng" type="button">
                                        <i class="fa fa-shopping-cart"></i> {{ __('Thêm vào giỏ hàng') }}
                                    </button>
                                </div>
                                <div class="email-addto-box">
                                    <ul class="add-to-links">
                                        <li>
                                            <a class="link-wishlist wishlist" value="{{ $product->id }}" href="{{ route('site.cart.add_to_wishlist') }}"><i class="fa fa-heart"></i>
                                                <span>{{ __('Thêm vào yêu thích') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="link-compare compare" value="{{ $product->id }}" href="{{ route('site.cart.add_to_compare') }}"><i class="fa fa-signal"></i>
                                                <span>{{ __('Thêm vào so sánh') }}</span>
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
                        <li class="active"><a href="#product_tabs_description" data-toggle="tab">{{ __('Mô tả') }}</a></li>
                        <li><a href="#product_tabs_tags" data-toggle="tab">{{ __('Thông số kỹ thuật') }}</a></li>
                        <li><a href="#product_tabs_comment" data-toggle="tab">{{ __('Bình luận') }}</a></li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div style="font-family: Arial" class="std">
                                {!! $product->descript !!}
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
                                                    <th class="col-lg-1 table-product">{{ __('Màn hình:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->screen }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-2 table-product">{{ __('Hệ điều hành:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->os }}</td>

                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">{{ __('CPU:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->front_camera }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">{{ __('Card màn hình:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->back_camera }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">
                                                    {{ __('RAM:') }}</td>
                                                    <td class="col-lg-5 table-product">
                                                    {{ $product->configuration->ram }}</th>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">{{ __('Ổ cứng:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->memory }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="col-lg-1 table-product">{{ __('Cổng kết nối:') }}</th>
                                                    <td class="col-lg-5 table-product">{{ $product->configuration->battery_capacity }}</td>
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
                                            <h4>{{ __('Thêm nhận xét') }}</h4>
                                            <div>
                                                <div class="form-group">
                                                    <textarea type="text" rows="5" name="comment_body" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input id="add-comment" type="submit" post="{{ $product->id }}" class="btn btn-warning" value="ĐĂNG"/>
                                                </div>
                                            </div>
                                            @if($product->comments->count() > 0)
                                                <div style="font-family: Arial" class="title"><h4>{{ count($product->comments) }} {{ __('Nhận xét và đánh giá') }} </h4></div>
                                            @else
                                                <div style="font-family: Arial" class="title"><h5>Hãy là người đầu tiên bình luận sản phẩm</h5></div>
                                            @endif
                                            @include('site.product.reply', ['comments' => $product->comments()->latest()->get(), 'product_id' => $product->id])
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
                    <h2 style="font-family:Arial">{{ __('Sản phẩm cùng loại') }}</h2>
                </div>
                <div class="related-block">
                    <div id="jtv-related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            @foreach($product_relate as $row)
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a class="product-image" title="Xem chi tiết sản phẩm" href="product-detail.html">
                                                    <img alt="" src="{{ url(config('app.imageUrl')) }}/{{ $row->avatar }}">
                                                </a>
                                                <div class="new-label new-top-left">NEW</div>
                                                <div class="mask-shop-white"></div>
                                                <a class="wishlist" value="{{ $row->id }}" href="{{ route('site.cart.add_to_wishlist') }}">
                                                    <div class="mask-left-shop">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </a>
                                                <a class="compare" value="{{ $row->id }}" href="{{ route('site.cart.add_to_compare') }}">
                                                    <div class="mask-right-shop">
                                                        <i class="fa fa-signal"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="Xem chi tiết sản phẩm" href="{{ route('product.view', ['id' => $row->id]) }}">{{ $row->name }}</a></div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        @for($i = 1;$i < 6;$i++)
                                                            @if($i > round($row->averageRating))
                                                                <i class="fa fa-star-o"></i>
                                                            @else
                                                                <i class="fa fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"> <span class="price">{{ number_format($row->price - $row->discount, null, null, ".") }} VNĐ</span></span>
                                                            @if($row->discount > 0)
                                                                <p class="old-price"><span class="price-label">Giá bán:</span> <span class="price"> {{ number_format($row->price, null, null, ".") }} VNĐ</span></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button data="{{ $row->id }}" link="{{ route('site.cart.add') }}" class="button btn-cart" type="button">
                                                                <span>
                                                                    <i class="fa fa-shopping-cart"></i> {{ __('Thêm vào giỏ hàng') }}
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                    <h2 style="font-family: Arial">{{ __('Sản phẩm bán chạy') }}</h2>
                </div>
                <div class="upsell-block">
                    <div id="jtv-upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            @foreach($product_sell as $row)
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a class="product-image" title="Xem chi tiết sản phẩm" href="product-detail.html">
                                                    <img alt="" src="{{ url(config('app.imageUrl')) }}/{{ $row->avatar }}">
                                                </a>
                                                <div class="new-label new-top-left">NEW</div>
                                                <div class="mask-shop-white"></div>
                                                <a class="wishlist" value="{{ $row->id }}" href="{{ route('site.cart.add_to_wishlist') }}">
                                                    <div class="mask-left-shop">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </a>
                                                <a class="compare" value="{{ $row->id }}" href="{{ route('site.cart.add_to_compare') }}">
                                                    <div class="mask-right-shop">
                                                        <i class="fa fa-signal"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a title="Xem chi tiết sản phẩm" href="{{ route('product.view', ['id' => $row->id]) }}">{{ $row->name }}</a></div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        @for($i = 1;$i < 6;$i++)
                                                            @if($i > round($row->averageRating))
                                                                <i class="fa fa-star-o"></i>
                                                            @else
                                                                <i class="fa fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"> <span class="price">{{ number_format($row->price - $row->discount, null, null, ".") }} VNĐ</span></span>
                                                            @if($row->discount > 0)
                                                                <p class="old-price"><span class="price-label">Giá bán:</span> <span class="price"> {{ number_format($row->price, null, null, ".") }} VNĐ</span></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button data="{{ $row->id }}" link="{{ route('site.cart.add') }}" class="button btn-cart" type="button">
                                                                <span>
                                                                    <i class="fa fa-shopping-cart"></i> {{ __('Thêm vào giỏ hàng') }}
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Upsell  Slider -->
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('source/bower_components/library/site/version4/js/validate-price.js') }}"></script>
    <script type="text/javascript" src="{{ asset('source/bower_components/library/site/version4/js/add-comment.js') }}"></script>
@endsection
