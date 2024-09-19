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
                    <a href="{{ route('admin.index') }}">
                        {{--<span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>--}}
                        <span>Quản lý sản phẩm</span>
                    </a>
                </div>
                {{--<div class="link-level-1">--}}
                    {{--<div class="item">--}}
                        {{--<a href="">Quản lý danh mục</a>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<a href="">Quản lý biến thể</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('admin.category') }}">
                        {{--<span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>--}}
                        <span>Quản lý danh mục</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('admin.variants') }}">
                        {{--<span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>--}}
                        <span>Quản lý biến thể</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('admin.orders') }}">
                        {{--<span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>--}}
                        <span>Quản lý đơn hàng</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('admin.reports.index') }}">
                        {{--<span><img src="{{ asset('dist/images/i-1.svg') }}" alt="i-1"></span>--}}
                        <span>Báo cáo, thống kê</span>
                    </a>
                </div>
            </div>
            <div class="link-level-0">
                <div class="main-link">
                    <a href="{{ route('dashboard.logout') }}">
                        <span><img src="{{ asset('dist/images/i-8.svg') }}" alt="i-8"></span>
                        <span>Đăng xuất</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>