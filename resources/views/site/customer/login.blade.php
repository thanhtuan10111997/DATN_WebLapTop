@extends('site.layout')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            @include('site.message')
            <div class="account-login">
                <div class="page-title">
                    <h2 style="font-family:Arial">{{ __('Đăng Nhập Tài Khoản') }}</h2>
                </div>
                {!! Form::open(['route' => 'site.customer.login', 'method' => 'post', 'class' => 'form']) !!}
                <fieldset>
                    <div class="registered-users">
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <label for="email">Email <span class="required">*</span></label>
                                    {!! Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']) !!}
                                </li>
                                <li>
                                    <label for="pass">Mật khẩu <span class="required">*</span></label>
                                    {!! Form::password('password', ['required', 'class' => 'input-text required-entry']) !!}
                                </li>
                            </ul>
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remember', '1') !!}{{ __(' Nhớ mật khẩu') }}
                                </label>
                            </div>
                            <div class="buttons-set">
                                {{ Form::submit('ĐĂNG NHẬP', ['class' => 'button login']) }}
                                <a class="forgot-word" href="{{ route('password.request') }}">{{ __("Quên Mật Khẩu?") }}</a></div>
                        </div>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
@endsection