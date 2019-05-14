@extends('site.layout')
@section('content')
    <div style="font-family:Arial" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"><a title="Đi đến Trang chủ" href="index.html">{{ __('Trang Chủ') }}</a> <span>/</span></li>
                        <li><strong>{{ __('Liên Hệ Với Chúng Tôi') }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div style="font-family:Arial" class="main-container col2-right-layout">
        <div class="container">
            <div class="row">
                <section class="col-sm-9">
                    <div class="col-main">
                        <div class="static-inner">
                            @include('site.message')
                            <div class="page-title">
                                <h2>{{ __('Liên Hệ Với Chúng Tôi') }}</h2>
                            </div>
                            <div class="static-contain">
                                {!! Form::open(['route' => 'site.contact.create', 'method' => 'post', 'class' => 'form']) !!}
                                <fieldset class="group-select">
                                    <ul>
                                        <li id="billing-new-address-form">
                                            <fieldset>
                                                <ul>
                                                    <li>
                                                        <div class="customer-name">
                                                            <div class="input-box name-firstname">
                                                                <label for="billing:firstname">{{ __('Tên') }}<span class="required">*</span></label>
                                                                <br>
                                                                {!! Form::text('user_name', old('user_name'), ['required', 'class' => 'input-text required-entry']) !!}
                                                            </div>
                                                            <div class="input-box name-lastname" style="width:466px">
                                                                <label for="billing:lastname">{{ __('Email') }}<span class="required">*</span></label>
                                                                <br>
                                                                {!! Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']) !!}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>{{ __('Tiêu đề') }} <span class="required">*</span></label>
                                                        <br>
                                                        {!! Form::text('title', old('title'), ['required', 'class' => 'input-text required-entry']) !!}
                                                    </li>
                                                    <li class="">
                                                        <label for="comment">{{ __('Nội dung') }}<em class="required">*</em></label>
                                                        <br>
                                                        <div class="">
                                                            {!! Form::textarea('content', old('content'), ['required', 'class' => 'input-text required-entry', 'cols' => 5, 'rows' => 5]) !!}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                        <li>
                                            <p style="color:red" class="require"><em class="required">* </em>{{ __('Trường bắt buộc') }}</p>
                                            <div class="buttons-set">
                                                {{ Form::submit(__('Gửi'), ['class' => 'button submit']) }}
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection