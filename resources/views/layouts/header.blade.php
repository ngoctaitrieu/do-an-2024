<div id="main-wrapper">
    <header id="header">
        <div class="header-inner">
            <div class="header-top">
                <div class="container">
                    <div class="h__top">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('dist/images/logo.png') }}" alt=""></a>
                        </div>
                        <div class="h__right">
                            <form method="get" action="{{ route('home.search') }}">
                                <div class="search-bar">
                                    <div class="search">
                                        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm">
                                        <button><img src="{{ asset('dist/images/search.svg') }}" alt="search"></button>
                                    </div>
                                </div>
                            </form>
                            <div class="more-cart">
                                <div class="deal d-none">
                                    <button><img src="{{ asset('dist/images/dflash.svg') }}" alt="dflash">Săn deal</button>
                                </div>
                                <div class="cart-nor">
                                    <div class="cart__item @if(!auth()->check())nlogin-notification @endif">
                                        <a href="@if(!auth()->check())#! @else {{ route('dashboard.cart') }} @endif" class="@if(!auth()->check())notifi-nolg @endif">
                                            <img src="{{ asset('dist/images/dcart-3.svg') }}" alt="cart">
                                            <div class="cart__label qty__cart">0</div>
                                        </a>
                                        <div class="drop-notifi">
                                            <div class="title">
                                                <div class="cl-title">
                                                    <img src="{{ asset('dist/images/notifi.svg') }}" alt="notifi">
                                                    <h4>Bạn chưa đăng nhập</h4>
                                                </div>
                                                <p>Vui lòng đăng nhập để sử dụng tính năng này</p>
                                                <div class="notifi-bnt">
                                                    <a href="#!" class="close-notifi">Đóng</a>
                                                    <a href="{{ route('login.index') }}">Đăng nhập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="cart__item nlogin-notification">--}}
                                        {{--<a href="#!" class="notifi-nolg">--}}
                                            {{--<img src="{{ asset('dist/images/dcart-4.svg') }}" alt="cart">--}}
                                        {{--</a>--}}
                                        {{--<div class="drop-notifi">--}}
                                            {{--<div class="title">--}}
                                                {{--<div class="cl-title">--}}
                                                    {{--<img src="{{ asset('dist/images/notifi.svg') }}" alt="notifi">--}}
                                                    {{--<h4>Bạn chưa đăng nhập</h4>--}}
                                                {{--</div>--}}
                                                {{--<p>Vui lòng đăng nhập để sử dụng tính năng này</p>--}}
                                                {{--<div class="notifi-bnt">--}}
                                                    {{--<a href="#!" class="close-notifi">Đóng</a>--}}
                                                    {{--<a href="#">Đăng nhập</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    @if(auth()->check())
                                        <div class="header__user">
                                            <div class="user__item">
                                                <div class="user__img">
                                                    <a href="@if(auth()->user()->role == 1){{ route('dashboard.index') }}@else{{ route('admin.index') }}@endif"><img src="{{ asset('dist/images/user.svg') }}" alt="user"></a>
                                                </div>
                                                <div class="user__label">
                                                    <a href="@if(auth()->user()->role == 1){{ route('dashboard.index') }}@else{{ route('admin.index') }}@endif">
                                                        <span>Xin chào!</span>
                                                        <h4>{{ auth()->user()->name }}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="user">
                                            <a href="/regíter">Đăng ký</a><span>/</span><a href="/login">Đăng nhập</a>
                                        </div>
                                     @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $categories = \App\Models\Category::all();
            @endphp
            <div class="header-bottom">
                <div class="container">
                    <div class="main-menu">
                        <div class="main-menu__inner">
                            <ul>
                                <li class="link-main">
                                    <a href="#!">
                                        <img src="{{ asset('dist/images/main-menu.svg') }}" alt="main-menu">
                                        <span>Danh Mục sản phẩm</span>
                                    </a>
                                    <div class="vertical-menu">
                                        <div class="row row-0">
                                            <div class="col-4 p-0">
                                                <div class="vertical-menu__left">
                                                    <ul>
                                                        @foreach($categories as $key => $item)
                                                            <li class="vertical-sub" id="lv-{{ $key + 1 }}">
                                                                <a href="{{ route('products.index2', ['category' => $item['slug']]) }}">{{ $item['name'] }}</a>
                                                                <i class="fal fa-angle-right"></i>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-8 p-0">
                                                @foreach($categories as $key => $item)
                                                    <div tab-index="lv-{{ $key + 1 }}" class="vertical-menu__right">
                                                        <h2>Danh mục {{ $item['name'] }}</h2>
                                                        <div class="menu-right-list">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="list-item">
                                                                        <ul>
                                                                            @foreach($item->categorySub as $item2)
                                                                                <li><a href="{{ route('products.index', ['category' => $item['slug'], 'category_sub' => $item2['slug']]) }}">{{ $item2['name'] }}</a></li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="link-main">
                                    <a href="{{ route('home.about') }}">
                                        <span>Giới thiệu</span>
                                    </a>
                                </li>
                                <li class="link-main">
                                    <a href="{{ route('home.faq') }}">
                                        <span>Câu hỏi thường gặp</span>
                                    </a>
                                </li>
                                <li class="link-main">
                                    <a href="{{ route('home.support') }}">
                                        <span>Hỗ trợ 24/7</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </header>