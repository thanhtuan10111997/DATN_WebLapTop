@extends('site.layout')
@section('content')
    <section class="content-wrapper">
        <div class="container" style="font-family:Arial">
            <div class="std">
                <div class="page-not-found">
                    <h4>{{ __('Cảm ơn bạn đã mua hàng, chúng tôi đã sẽ liên hệ với quý khách để xác nhận đơn hàng.') }}</h4>
                    <h4>{{ __('Nếu có bất kỳ thắc mắc vui lòng liên hệ ngay với chúng tôi để được giải đáp.') }}</h4>
                    <br>
                    <div>
                        <a href="{{ route('site.home.index') }}" type="button" class="btn-home">
                            <span style="font-family:Arial" >{{ __('Trở về Trang chủ') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection