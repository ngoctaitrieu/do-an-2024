<div class="main-nav">
    <div class="main-nav__inner">
        <div class="dash-logo">
            <a href="/">
                <figure><img src="{{ asset('dist/images/dash-logo.png') }}" alt="dash-logo"></figure>
            </a>
        </div>
        <div class="list-option">
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('dashboard.index') }}">
                        <span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>
                        <span>Tài khoản</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('dashboard.cart') }}">
                        <span><img src="{{ asset('dist/images/i-2.svg') }}" alt="i-2"></span>
                        <span>Giỏ hàng</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('dashboard.orderManagement') }}">
                        <span><img src="{{ asset('dist/images/i-3.svg') }}" alt="i-3"></span>
                        <span>Quản lý đơn hàng</span>
                    </a>
                    {{--<i class="fal fa-angle-right"></i>--}}
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('favorite.index') }}">
                        <span><img src="{{ asset('dist/images/i-4.svg') }}" alt="i-4"></span>
                        <span>Yêu thích</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="#">
                        <span><img src="{{ asset('dist/images/i-5.svg') }}" alt="i-5"></span>
                        <span>Mã giảm giá</span>
                    </a>
                </div>
            </div>
            {{--<div class="link-level-0">--}}
                {{--<div class="main-link">--}}
                    {{--<a href="#">--}}
                        {{--<span><img src="dist/images/i-6.svg" alt="i-6"></span>--}}
                        {{--<span>giới thiệu bạn bè</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="link-level-0">--}}
                {{--<div class="main-link">--}}
                    {{--<a href="#">--}}
                        {{--<span><img src="dist/images/i-7.svg" alt="i-7"></span>--}}
                        {{--<span>Thông báo</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="link-level-0">
                <div class="main-link">
                    <a href="#">
                        <span><img src="{{ asset('dist/images/i-8.svg') }}" alt="i-8"></span>
                        <span>Đăng xuất</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>