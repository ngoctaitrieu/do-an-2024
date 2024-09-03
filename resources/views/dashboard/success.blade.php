@extends('layouts.app')
@section('content')
    <style>
        #footer, #header {
            display: none;
        }
    </style>
    <section class="ffc-dashboard">
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="main-content__inner">
                @include('layouts.header-das')
                <div class="main-content__content">
                    <div class="main-content__inner">
                        <div class="content">
                            <div class="result-cart">
                                <div class="text">
                                    <h1>@if(isset($title)) {{ $title }} @else Đặt hàng thành công @endif</h1>
                                    <p>
                                        @if(isset($content))
                                            {{ $content }}
                                        @else
                                            Đơn hàng của bạn đã được đặt thành công, quá trình giao hàng sẽ được cập nhật liên
                                            tục trên hệ thống, bạn vui lòng kiểm tra thường xuyên để nhận hàng sớm nhất có thể
                                        @endif
                                    </p>
                                    <div class="bnt-cart">
                                        <button><img src="dist/images/re-cart-1.svg" alt="re-cart">Quay lại mua hàng</button>
                                        <button><img src="dist/images/re-cart-2.svg" alt="re-cart-2">Quản lý đơn hàng</button>
                                    </div>
                                </div>
                                <div class="img-cart">
                                    <figure>
                                        <img src="dist/images/cart-right.png" alt="cart-right">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup-adress">
        <div class="popup-adress__inner">
            <div class="popup">
                <h2>Thêm mới địa chỉ</h2>
                <form action="">
                    <div class="cl-6">
                    <span>
                        <label for="">Họ tên<span>*</span></label>
                        <input type="text" name="" id="" value="Nguyễn Anh">
                    </span>
                        <span>
                        <label for="">Số điện thoại<span>*</span></label>
                        <input type="text" name="" id="" value="096378945">
                    </span>
                    </div>
                    <span class="cl-12">
                    <label for="">Địa chỉ cụ thể<span>*</span></label>
                    <input type="text" name="" id="" value="15 Tố Hữu, Thanh Xuân, Hà Nội">
                </span>
                    <div class="cl-4">
                    <span>
                        <label for="">Thành phố/Tỉnh<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                        <span>
                        <label for="">Quận/Huyên<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Thanh Xuân</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                        <span>
                        <label for="">Phường/Xã<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Tố Hữu</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                    </div>
                    <span class="check">
                    <input type="checkbox" name="" id="">
                    <label for="">Giao hàng hành chính</label>
                </span>
                    <span class="bnt-submit">
                    <button>Lưu</button>
                    <button>Huỷ</button>
                </span>
                </form>
            </div>
        </div>
    </div>
    <div class="adress-overlay"></div>
@endsection
{{--JS--}}
@section('script')
    <script>

    </script>
@endsection