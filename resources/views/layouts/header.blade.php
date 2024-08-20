<div id="main-wrapper">
    <header id="header">
        <div class="header-inner">
            <div class="header-top">
                <div class="container">
                    <div class="h__top">
                        <div class="logo">
                            <a href="/"><img src="dist/images/logo.png" alt=""></a>
                        </div>
                        <div class="h__right">
                            <div class="search-bar">
                                <div class="search">
                                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                                    <button><img src="dist/images/search.svg" alt="search"></button>
                                </div>
                            </div>
                            <div class="more-cart">
                                <div class="deal">
                                    <button><img src="dist/images/dflash.svg" alt="dflash">Săn deal</button>
                                </div>
                                <div class="cart-nor">
                                    <div class="cart__item">
                                        <a href="#!">
                                            <img src="dist/images/dcart-3.svg" alt="cart">
                                        </a>
                                    </div>
                                    <div class="cart__item nlogin-notification">
                                        <a href="#!" class="notifi-nolg">
                                            <img src="dist/images/dcart-4.svg" alt="cart">
                                        </a>
                                        <div class="drop-notifi">
                                            <div class="title">
                                                <div class="cl-title">
                                                    <img src="dist/images/notifi.svg" alt="notifi">
                                                    <h4>Bạn chưa đăng nhập</h4>
                                                </div>
                                                <p>Vui lòng đăng nhập để sử dụng tính năng này</p>
                                                <div class="notifi-bnt">
                                                    <a href="#!" class="close-notifi">Đóng</a>
                                                    <a href="#">Đăng nhập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(auth()->check())
                                        <div class="header__user">
                                            <div class="user__item">
                                                <div class="user__img">
                                                    <a href=""><img src="dist/images/user.svg" alt="user"></a>
                                                </div>
                                                <div class="user__label">
                                                    <a href="">
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
            <div class="header-bottom">
                <div class="container">
                    <div class="main-menu">
                        <div class="main-menu__inner">
                            <ul>
                                <li class="link-main">
                                    <a href="#!">
                                        <img src="dist/images/main-menu.svg" alt="main-menu">
                                        <span>Danh Mục sản phẩm</span>
                                    </a>
                                    <div class="vertical-menu">
                                        <div class="row row-0">
                                            <div class="col-4 p-0">
                                                <div class="vertical-menu__left">
                                                    <ul>
                                                        <li class="vertical-sub" id="lv-1">
                                                            <a href="#">Đồ điện tử</a>
                                                            <i class="fal fa-angle-right"></i>
                                                        </li>
                                                        <li class="vertical-sub" id="lv-2">
                                                            <a href="#">Đồ nội thất</a>
                                                            <i class="fal fa-angle-right"></i>
                                                        </li>
                                                        <li class="vertical-sub" id="lv-3">
                                                            <a href="#">Đồ gia dụng</a>
                                                            <i class="fal fa-angle-right"></i>
                                                        </li>
                                                        <li class="vertical-sub" id="lv-4">
                                                            <a href="#">Đồ kỹ thuật</a>
                                                            <i class="fal fa-angle-right"></i>
                                                        </li>
                                                        <li class="vertical-sub" id="lv-5">
                                                            <a href="#">Mỹ phẩm</a>
                                                            <i class="fal fa-angle-right"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-8 p-0">
                                                <div tab-index="lv-1" class="vertical-menu__right">
                                                    <h2>Danh sách đồ điện tử</h2>
                                                    <div class="menu-right-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tab-index="lv-2" class="vertical-menu__right">
                                                    <h2>Danh sách đồ công nghệ</h2>
                                                    <div class="menu-right-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tab-index="lv-3" class="vertical-menu__right">
                                                    <h2>Danh sách đồ da dụng</h2>
                                                    <div class="menu-right-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tab-index="lv-4" class="vertical-menu__right">
                                                    <h2>Danh sách đồ mỹ phẩm</h2>
                                                    <div class="menu-right-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tab-index="lv-5" class="vertical-menu__right">
                                                    <h2>Danh sách đồ cá nhân</h2>
                                                    <div class="menu-right-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a href="#">Máy tính</a></li>
                                                                        <li><a href="#">Điện thoại</a></li>
                                                                        <li><a href="#">Tivi</a></li>
                                                                        <li><a href="#">Điều hòa</a></li>
                                                                        <li><a href="#">Máy giặt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="link-main">
                                    <a href="#!">
                                        <span>Giới thiệu</span>
                                    </a>
                                </li>
                                <li class="link-main">
                                    <a href="#!">
                                        <span>Săn deal</span>
                                    </a>
                                </li>
                                <li class="link-main">
                                    <a href="#!">
                                        <span>Tin tức</span>
                                    </a>
                                </li>
                                <li class="link-main">
                                    <a href="#!">
                                        <span>Hỗ trợ 24/7</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </header>