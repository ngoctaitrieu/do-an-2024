</div>
<!--end-main-wrapper-->
<footer id="footer" class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="main-footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="f-item">
                            <div class="f-logo">
                                <a href="#">
                                    <figure><img src="{{ asset('dist/images/f-logo.png') }}" alt="f-logo"></figure>
                                </a>
                            </div>
                            <div class="list-address">
                                <ul>
                                    <li>
                                        <a href="tel:3104372766">
                                            <figure><img src="{{ asset('dist/images/tel.svg') }}" alt="tel"></figure>
                                            <div class="desc">
                                                <span>Hotline</span>
                                                <h4>310-437-2766</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:ureal@outlock.com">
                                            <figure><img src="{{ asset('dist/images/mail.svg') }}" alt="mail"></figure>
                                            <div class="desc">
                                                <span>Email</span>
                                                <h4>Unreal@outlock.com</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img src="{{ asset('dist/images/map.svg') }}" alt="map"></figure>
                                            <div class="desc">
                                                <span>Địa chỉ</span>
                                                <h4>706 Campfire Ave. Meriden, CT 06450</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="f-item">
                            <div class="list-link">
                                <h2>Về chúng tôi</h2>
                                <ul>
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Điều kiện và điều khoản</a></li>
                                    <li><a href="#">Quy chế hoạt động</a></li>
                                    <li><a href="#">Phản hồi khách hàng</a></li>
                                    <li><a href="#">Trung tâm hỗ trợ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="f-item">
                            <div class="list-link">
                                <h2>Dành cho khách hàng</h2>
                                <ul>
                                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                                    <li><a href="#">Chính sách đổi trả hàng</a></li>
                                    <li><a href="#">Chính sách giao dịch</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                    <li><a href="#">Cách thức giao nhận</a></li>
                                    <li><a href="#">Thanh toán hàng sản phẩm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="f-item">
                            <div class="title">
                                <h2>Đăng ký nhận tin mới</h2>
                                <p>Đừng bỏ lỡ sự kiện và chương trình giảm giá siêu hấp dẫn sẽ được chúng tôi cập nhật
                                    đến
                                    quý khách hàng tuần.</p>
                            </div>
                            <form action="">
                                <div class="input">
                                    <img src="{{ asset('dist/images/sms.svg') }}" alt="mail">
                                    <input type="text" placeholder="Nhập email của bạn">
                                </div>
                                <button>Đăng ký</button>
                            </form>
                            <div class="social">
                                <figure><img src="{{ asset('dist/images/bct.png') }}" alt="bct"></figure>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('dist/images/tiktok.png') }}" alt="tiktok"></a></li>
                                    <li><a href="#"><img src="{{ asset('dist/images/fb.png') }}" alt="fb"></a></li>
                                    <li><a href="#"><img src="{{ asset('dist/images/ytb.png') }}" alt="ytb"></a></li>
                                    <li><a href="#"><img src="{{ asset('dist/images/insta.png') }}" alt="insta"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy-right">
                    <div class="left">
                        <p>@FangFangChoice 2023, All Rights Reserved. </p>
                    </div>
                    <div class="right"><span>Design by</span><a href="#">Wecan Group</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="popup__repass">
    <div class="popup__content">
        <div class="title">
            <h2>Đổi mật khẩu</h2>
            <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
        </div>
        <div class="form__pass">
            <form action="" id="forgot-password">
                    <span>
                        <label for="password">Mật khẩu hiện tại<span>*</span></label>
                        <input type="password" name="currentPassword" id="current-password" required>
                    </span>
                <span>
                        <label for="password">Mật khẩu mới<span>*</span></label>
                        <input type="password" name="newPassword" id="new-password" required>
                    </span>
                <span>
                        <label for="password">Xác định mật khẩu<span>*</span></label>
                        <input type="password" name="newPasswordConfirm" id="new-password-confirm" required>
                    </span>
                {{--<a href="#">Quên mật khẩu ?</a>--}}
                <button>Xác nhận</button>
            </form>
        </div>
    </div>
</div>
<div class="popup__qpass">
    <div class="popup__content">
        <div class="title">
            <h2>Quên mật khẩu</h2>
            <p>Nhập email được liên kết với tài khoản của bạn </p>
        </div>
        <div class="form__pass">
            <form action="">
                    <span>
                        <label for="email">Nhập email<span>*</span></label>
                        <input type="text" name="email" id="email">
                    </span>
                <button>Lấy lại mật khẩu</button>
            </form>
        </div>
    </div>
</div>
<div class="bg__overlay"></div>