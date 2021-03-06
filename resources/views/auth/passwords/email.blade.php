@extends('site.layout')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
        @include('site.message')
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="account-login">
            <div class="page-title">
            <h2>KHÔI PHỤC MẬT KHẨU</h2>
        </div>
        {!! Form::open(['route' => 'password.email', 'method' => 'post', 'class' => 'form']) !!}
        <fieldset>
            <div class="registered-users">
            <div class="content">
                <p>{{ __('Vui lòng nhập vào email, chúng tôi sẽ gửi địa chỉ thay đổi mật khẩu vào trong email này  của bạn') }}</p>
                <ul class="form-list">
                    <li>
                        <label for="email">Email <span class="required">*</span></label>
                        {!! Form::email('email', old('email'), ['required', 'class' => 'input-text required-entry']) !!}
                    </li>
                </ul>
                <div class="buttons-set">
                    <button id="send2" name="send" type="submit" class="button login">
                        <span>{{ __('GỬI') }}</span>
                    </button>
                </div>
            </div>
            </div>
        </fieldset>
        {!! Form::close() !!}
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
@endsection
