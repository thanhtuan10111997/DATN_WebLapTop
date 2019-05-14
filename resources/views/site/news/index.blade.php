@extends('site.layout')
@section('content')
    <div class="breadcrumbs">
        <div class="container" style="font-family:Arial">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li>
                            <a style="font-family:Arial" href="{{ route('site.home.index') }}" title="Đi đến Trang chủ">{{ __('Trang Chủ') }}</a>
                            <span>/</span>
                        </li>
                        <li><strong style="font-family:Arial">{{ __('Tin Tức') }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_post" style="font-family:Arial">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9" id="center_column">
                    <div class="center_column">
                        <div class="page-title">
                            <h2 style="font-family:Arial">{{ __('Tin tức đã đăng') }}</h2>
                        </div>
                        <ul class="blog-posts">
                            @foreach($news as $row)
                                <li class="post-item">
                                    <article class="entry">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="entry-thumb">
                                                    <a href="{{ route('site.news.view', ['id' => $row->id]) }}">
                                                        <figure><img src="{{ url(config('app.newsUrl')) }}/{{ $row->avatar }}" alt="Tin"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <h3 class="entry-title">
                                                    <a href="{{ route('site.news.view', ['id' => $row->id]) }}">{{ $row->title }}</a>
                                                </h3>
                                                <div class="entry-meta-data">
                                                    <span class="author">
                                                        <i class="fa fa-user"></i>{!! __('&nbsp; by:') !!}
                                                        <a href="#"> {{ __('Admin') }}</a>
                                                    </span>
                                                    <span class="cat"></span>
		                      	                    <span class="date"><i class="fa fa-calendar"></i>&nbsp;{{ $row->created_at }}
                                                    </span>
                                                </div>
                                                <div class="entry-excerpt" style="height: 5em; overflow: hidden;">{!! $row->content !!}</div>
                                                <a style="font-family:Arial" href="{{ route('site.news.view', ['id' => $row->id]) }}" class="read-more">{!! ('Đọc thêm...&nbsp;') !!}
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                        {{ $news->links() }}
                    </div>
                </div>
                <!-- Right colunm -->
                <aside class="sidebar col-xs-12 col-sm-3">
                    <div style="font-family:Arial" class="search">
                        {!! Form::open(['route' => 'site.news.search', 'method' => 'get', 'class' => 'form']) !!}
                        {!! Form::search('key', null, ['class' => 'form-control', 'placeholder' => 'Tìm kiếm']) !!}
                        <button type="submit"><i class="fa fa-search"></i></button>
                        {!! Form::close() !!}
                    </div>
                    <!-- Popular Posts -->
                    <div class="block blog-module">
                        <div class="block-title">
                            <h3 style="font-family:Arial">{{ __('Tin tức mới nhất') }}</h3>
                        </div>
                        <div class="block_content" style="font-family:Arial">
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar">
                                        @foreach($news_new as $row)
                                            <li>
                                                <div class="post-thumb">
                                                    <a href="{{ route('site.news.view', ['id' => $row->id]) }}">
                                                        <img src="{{ url(config('app.newsUrl')) }}/{{ $row->avatar }}" alt="Tin">
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <h5 class="entry_title">
                                                        <a style="font-family:Arial" href="{{ route('site.news.view', ['id' => $row->id]) }}">{{ $row->title }}</a>
                                                    </h5>
                                                    <div class="post-meta">
                                                        <span class="date"><i class="fa fa-calendar"></i> {{ $row->created_at }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- ./right colunm -->
            </div>
            <!-- ./row-->
        </div>
    </section>
@endsection