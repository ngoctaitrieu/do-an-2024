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
                            <div class="title">
                                <h1>Thanh toán</h1>
                            </div>
                            <div class="form-content f-cart f-payment">
                                <div class="cart-inner">
                                    <div class="cart-left">
                                        <form action="">
                                            <div class="user-info f-payment-2">
                                                <div class="title">
                                                    <h2>Thông tin chung</h2>
                                                    {{--<a href="#">--}}
                                                        {{--<img src="dist/images/change.svg" alt="change">--}}
                                                        {{--<span>Đổi thông tin nhận hàng</span></a>--}}
                                                </div>
                                                <div class="des-info">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="i-info">
                                                                <span>Họ và tên:</span>
                                                                <h4 class="customer-name"></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="i-info">
                                                                <span>Điện thoại</span>
                                                                <h4 class="customer-phone"></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="i-info">
                                                                <span>Đia chỉ nhận hàng</span>
                                                                <h4 class="customer-address"></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note">
                                                        <strong>Lưu ý:</strong>
                                                        <p>(Đơn hàng sẽ được giao cho bạn vào giờ hành chính)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-cart">
                                                <div class="table-inner">
                                                    <div class="table-content">
                                                        {{--<div class="table-label">--}}
                                                            {{--<div class="del">--}}
                                                                {{--<div class="del-check">--}}
                                                                    {{--<input type="checkbox" name="check-all" id="check-all">--}}
                                                                    {{--<label for="check-all">Tất cả sản phẩm</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="more-col">--}}
                                                                {{--<div class="col-title quanlity">--}}
                                                                    {{--<h4>Số lượng</h4>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-title price">--}}
                                                                    {{--<h4>Số tiền</h4>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-title remove">--}}
                                                                    {{--<h4>Thao tác</h4>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        <div class="table-main cart-list">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pay-content">
                                                {{--<div class="pay-item">--}}
                                                    {{--<div class="pay-item__content">--}}
                                                        {{--<h2>Thông tin vận chuyển</h2>--}}
                                                        {{--<div class="list-ppvc">--}}
                                                            {{--<div class="pp-vchuyen">--}}
                                                                {{--<div class="content">--}}
                                                                    {{--<input type="radio" name="express" id="express">--}}
                                                                    {{--<label for="express">--}}
                                                                        {{--<strong>Express delivery</strong>--}}
                                                                        {{--<span>3-4 ngày</span>--}}
                                                                    {{--</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="pp-vchuyen">--}}
                                                                {{--<div class="content">--}}
                                                                    {{--<input type="radio" name="express1" id="express1">--}}
                                                                    {{--<label for="express1">--}}
                                                                        {{--<strong>Bưu điện</strong>--}}
                                                                        {{--<span>10-15 ngày</span>--}}
                                                                    {{--</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="pp-vchuyen">--}}
                                                                {{--<div class="content">--}}
                                                                    {{--<input type="radio" name="express2" id="express2">--}}
                                                                    {{--<label for="express2">--}}
                                                                        {{--<strong>Giao hàng tiết kiệm</strong>--}}
                                                                        {{--<span>5-7 ngày</span>--}}
                                                                    {{--</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="pp-payment">
                                                    <h2>Phương thức thanh toán</h2>
                                                    <div class="pp-ttoan">
                                                        <div class="item-tt">
                                                            <a data-type="2">
                                                                <div class="tt-content">
                                                                    <figure><img src="dist/images/pay-1.svg" alt="pay">
                                                                    </figure>
                                                                    <span>Thanh toán với thẻ</span>
                                                                </div>
                                                                <img src="dist/images/card.png" alt="cards" class="cards">
                                                            </a>
                                                        </div>
                                                        <div class="item-tt">
                                                            <a class="payment-selected" data-type="1">
                                                                <div class="tt-content">
                                                                    <figure><img src="dist/images/pay-2.svg" alt="pay-2">
                                                                    </figure>
                                                                    <span>Thanh toán khi nhận hàng</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cart-right">
                                        <div class="cart-right__inner">
                                            <div class="table-right">
                                                <h2>Hoá đơn</h2>
                                                <div class="form-right">
                                                    <div class="header-item">
                                                        <ul>
                                                            <li>
                                                                <span>Tạm tính<p>(Đã bao gồm thuế VAT)</p></span>
                                                                <span class="total-provisional"></span>
                                                            </li>
                                                            {{--<li>--}}
                                                                {{--<span>Phí vận chuyển</span>--}}
                                                                {{--<span>20.000<strong>Đ</strong></span>--}}
                                                            {{--</li>--}}
                                                        </ul>
                                                    </div>
                                                    <div class="body-item">
                                                        <div class="voucher">
                                                            <input type="text" name="voucher" id="">
                                                            <button>Áp dụng</button>
                                                        </div>
                                                    </div>
                                                    <div class="footer-item">
                                                        <div class="total">
                                                            <span>Tổng tiền:</span>
                                                            <span class="total-final"></span>
                                                        </div>
                                                        <div class="check">
                                                            <input type="checkbox" name="yes" id="yes">
                                                            <label for="yes">Đồng ý với <a href="#">điều khoản & chính
                                                                    sách</a> của FangFangChoice</label>
                                                        </div>
                                                        <div class="error"></div>
                                                        <button class="confirm">Đặt hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--JS--}}
@section('script')
    <script>
        // Show cart
        showCart();
        function showCart() {
            let total = 0;
            let cart;
            if(localStorage.getItem('selectedItem')) {
                cart = JSON.parse(localStorage.getItem('selectedItem'));
            } else {
                cart = [];
            }
            if(cart.length > 0) {
                $('.cart-list').empty();
                for(let item of cart) {
                    total += (item.price * item.quantity);
                    $('.cart-list').append('<div class="li-item">\n' +
                        '                                                                <div class="col-first">\n' +
                        // '                                                                    <div class="del">\n' +
                        // '                                                                        <input type="checkbox" name="check" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'">\n' +
                        // '                                                                    </div>\n' +
                        '                                                                    <div class="thumbnail">\n' +
                        '                                                                        <div class="thumb">\n' +
                        '                                                                            <figure><img src="'+ item.image +'"\n' +
                        '                                                                                         alt="thumb-1"></figure>\n' +
                        '                                                                            <a href="#">'+ item.name +'</a>\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="type">\n' +
                        '                                                                        <div class="type-button">\n' +
                        '                                                                            <span>Phân loại hàng</span>\n' +
                        '                                                                            <i class="fas fa-caret-down"></i>\n' +
                        '                                                                        </div>\n' +
                        '                                                                        <div class="result-type">\n' +
                        '                                                                            <span>'+ item.variant_name +':</span>\n' +
                        '                                                                            <strong>'+ item.product_variant_name +'</strong>\n' +
                        '                                                                        </div>\n' +
                        '                                                                    </div>\n' +
                        '                                                                </div>\n' +
                        '                                                                <div class="col-main">\n' +
                        '                                                                    <div class="quanlity">\n' +
                        // '                                                                        <button type="button" class="minus"></button>\n' +
                        '                                                                        <input type="number" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'" name="qty" min="1"\n' +
                        '                                                                               max="100" value="'+ item.quantity +'" readonly>\n' +
                        // '                                                                        <button type="button" class="plus"></button>\n' +
                        '                                                                    </div>\n' +
                        '                                                                    <div class="price">\n' +
                        '                                                                        <span>'+ item.price.toLocaleString() +' <strong>đ</strong></span>\n' +
                        '                                                                    </div>\n' +
                        // '                                                                    <div class="remove">\n' +
                        // '                                                                        <a href="javascript:void(0)" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'" class="remove-item">Xoá</a>\n' +
                        // '                                                                    </div>\n' +
                        '                                                                </div>\n' +
                        '                                                            </div>');
                }
            } else {
                $('.cart-list').html('<h3 style="font-size:1.5rem">Không có sản phẩm nào trong giỏ hàng!</h3>');
            }
            $('.total-provisional').text(total.toLocaleString() + 'đ');
            $('.total-final').text(total.toLocaleString() + 'đ');
        }
        let customer_information = JSON.parse(localStorage.getItem('customerInformation'));
        $('.customer-name').text(customer_information.customer_name);
        $('.customer-phone').text(customer_information.customer_phone);
        $('.customer-address').text(customer_information.customer_address);

        $('.pp-ttoan a').on('click', function () {
            $('.pp-ttoan a').removeClass('payment-selected');
            $(this).addClass('payment-selected');
        });
        //
        let click = false;
        $('.confirm').on('click', function () {
           if($('#yes').is(':checked')) {
               let payment_method = $('.payment-selected').attr('data-type');
               if(!click) {
                   $.ajax({
                       type: 'post',
                       dataType: 'json',
                       cache: false,
                       url: '{{ route('dashboard.order') }}',
                       data: {
                           customer : JSON.parse(localStorage.getItem('customerInformation')),
                           selectedItem : JSON.parse(localStorage.getItem('selectedItem')),
                           payment_method : payment_method,
                           "_token": "{{ csrf_token() }}",
                       },
                       beforeSend: function() {
                           $('.confirm').css('opacity', 0.3);
                       },
                       success: function(response) {
                           click = false;
                           $('.confirm').css('opacity', 1);
                           if (response.status == 1) {
                           // localStorage.removeItem('cart');
                           // localStorage.removeItem('selectedItem');
                           // localStorage.removeItem('customerInformation');
                           showCartNumber();
                               if(payment_method == 2) {
                                    window.location.href = response.payment_link;
                               } else {
                                   // Swal.fire({
                                   //     icon: 'success',
                                   //     text: response.message,
                                   // });
                                   window.location.href = '{{ route('dashboard.success') }}';
                               }
                           } else {
                               Swal.fire({
                                   icon: 'error',
                                   text: response.message,
                               });
                           }
                       }
                   });
               }
           } else {
                $('.error').text('Vui lòng đồng ý với điều khoản và chính sách của chúng tôi');
           }
        });
    </script>
@endsection