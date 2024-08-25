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
                                <h1>Giỏ hàng</h1>
                            </div>
                            <div class="form-content f-cart">
                                <div class="cart-inner">
                                    <div class="cart-left">
                                        <form action="">
                                            <div class="user-info">
                                                <div class="title">
                                                    <h2>Thông tin chung</h2>
                                                    {{--<a href="#"><img src="dist/images/change.svg" alt="change"><span>Đổi--}}
                                                        {{--thông tin--}}
                                                        {{--nhận hàng</span></a>--}}
                                                </div>
                                                <div class="des-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-4">
                                                            <div class="i-info">
                                                                <span>Họ và tên:</span>
                                                                {{--<h4>Nguyễn Hoàng Long</h4>--}}
                                                                <input type="text" id="customer-name" value="{{ auth()->user()->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-4">
                                                            <div class="i-info">
                                                                <span>Điện thoại</span>
                                                                {{--<h4>035 654 8547</h4>--}}
                                                                <input type="number" id="customer-phone" value="{{ auth()->user()->phone }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-4">
                                                            <div class="i-info">
                                                                <span>Đia chỉ nhận hàng</span>
                                                                {{--<h4>Số 15 Tố Hữu, Nam Từ Liêm, Hà Nội</h4>--}}
                                                                <input type="text" id="customer-address" value="" placeholder="Số 15 Tố Hữu, Nam Từ Liêm, Hà Nội">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-cart">
                                                <div class="table-inner">
                                                    <div class="table-content">
                                                        <div class="table-label">
                                                            <div class="del">
                                                                <div class="del-check">
                                                                    <input type="checkbox" name="check-all" id="check-all">
                                                                    <label for="check-all">Tất cả sản phẩm</label>
                                                                </div>
                                                            </div>
                                                            <div class="more-col">
                                                                <div class="col-title quanlity">
                                                                    <h4>Số lượng</h4>
                                                                </div>
                                                                <div class="col-title price">
                                                                    <h4>Số tiền</h4>
                                                                </div>
                                                                <div class="col-title remove">
                                                                    <h4>Thao tác</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-main cart-list">
                                                            <div class="li-item">
                                                                <div class="col-first">
                                                                    <div class="del">
                                                                        <input type="checkbox" name="check">
                                                                    </div>
                                                                    <div class="thumbnail">
                                                                        <div class="thumb">
                                                                            <figure><img src="dist/images/thumb-1.png"
                                                                                         alt="thumb-1"></figure>
                                                                            <a href="#">Combo dầu gội 640 gr và dầu xả 620
                                                                                gr
                                                                                Treseme.... </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="type">
                                                                        <div class="type-button">
                                                                            <span>Phân loại hàng</span>
                                                                            <i class="fas fa-caret-down"></i>
                                                                        </div>
                                                                        <div class="result-type">
                                                                            <span>Thể loại:</span>
                                                                            <strong>15 ml</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-main">
                                                                    <div class="quanlity">
                                                                        <button class="minus"></button>
                                                                        <input type="number" name="qty" id="qty" min="1"
                                                                               max="100" value="1">
                                                                        <button class="plus"></button>
                                                                    </div>
                                                                    <div class="price">
                                                                        <span>250.000 <strong>đ</strong></span>
                                                                    </div>
                                                                    <div class="remove">
                                                                        <a href="#">Xoá</a>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                            <span class="total-final"> </span>
                                                        </div>
                                                        {{--<div class="check">--}}
                                                            {{--<input type="checkbox" name="yes" id="yes">--}}
                                                            {{--<label for="yes">Đồng ý với <a href="#">điều khoản & chính--}}
                                                                    {{--sách</a> của FangFangChoice</label>--}}
                                                        {{--</div>--}}
                                                        <button class="order">Đặt hàng</button>
                                                        <div class="error"></div>
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
            if(localStorage.getItem('cart')) {
                cart = JSON.parse(localStorage.getItem('cart'));
            } else {
                cart = [];
            }
            if(cart.length > 0) {
                $('.cart-list').empty();
                for(let item of cart) {
                    total += (item.price * item.quantity);
                    $('.cart-list').append('<div class="li-item">\n' +
'                                                                <div class="col-first">\n' +
'                                                                    <div class="del">\n' +
'                                                                        <input type="checkbox" name="check" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'">\n' +
'                                                                    </div>\n' +
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
'                                                                        <button type="button" class="minus"></button>\n' +
'                                                                        <input type="number" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'" name="qty" min="1"\n' +
'                                                                               max="100" value="'+ item.quantity +'">\n' +
'                                                                        <button type="button" class="plus"></button>\n' +
'                                                                    </div>\n' +
'                                                                    <div class="price">\n' +
'                                                                        <span>'+ item.price.toLocaleString() +' <strong>đ</strong></span>\n' +
'                                                                    </div>\n' +
'                                                                    <div class="remove">\n' +
'                                                                        <a href="javascript:void(0)" data-product-id="'+ item.product_id +'" data-product-variant-id="'+ item.product_variant_id +'" class="remove-item">Xoá</a>\n' +
'                                                                    </div>\n' +
'                                                                </div>\n' +
'                                                            </div>');
                }
            } else {
                $('.cart-list').html('<h3 style="font-size:1.5rem">Không có sản phẩm nào trong giỏ hàng!</h3>');
            }
            $('.total-provisional').text(total.toLocaleString() + 'đ');
            $('.total-final').text(total.toLocaleString() + 'đ');
        }
        function changeQuantity(product_id, product_variant_id, quantity) {
            let cart = JSON.parse(localStorage.getItem('cart'));
            if(cart) {
                for(let i = 0; i < cart.length; i++) {
                    if(cart[i].product_id === product_id && cart[i].product_variant_id === product_variant_id) {
                        cart[i].quantity = Math.abs(parseInt(quantity));
                    }
                }
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            showCart();
        }
        $('body').on("click", '.plus', function () {
           let quantity = parseInt($(this).parent().find('input').val());
            $(this).parent().find('input').val(quantity + 1);
            let product_id = parseInt($(this).parent().find('input').attr('data-product-id'));
            let product_variant_id = parseInt($(this).parent().find('input').attr('data-product-variant-id'));
            changeQuantity(product_id, product_variant_id, quantity + 1);
        });
        $('body').on("click", '.minus', function () {
            let quantity = parseInt($(this).parent().find('input').val());
            if(quantity > 1) {
                $(this).parent().find('input').val(quantity - 1);
                let product_id = parseInt($(this).parent().find('input').attr('data-product-id'));
                let product_variant_id = parseInt($(this).parent().find('input').attr('data-product-variant-id'));
                changeQuantity(product_id, product_variant_id, quantity - 1);
            }
        });
        $('#check-all').on('click', function () {
           if($(this).is(':checked')) {
               $('input[name="check"]').map(function () {
                  $(this).prop('checked', true);
               });
           } else {
               $('input[name="check"]').map(function () {
                   $(this).prop('checked', false);
               });
           }
        });
        $('body').on("click", '.remove-item', function () {
            let product_id = parseInt($(this).attr('data-product-id'));
            let product_variant_id = parseInt($(this).attr('data-product-variant-id'));
            let cart = JSON.parse(localStorage.getItem('cart'));
            cart = cart.filter(item => (item.product_id !== product_id || item.product_variant_id !== product_variant_id));
            localStorage.setItem('cart', JSON.stringify(cart));
            showCart();
            showCartNumber();
        });
        $('.order').on('click' ,function () {
            let customer_name = $('#customer-name').val();
            let customer_phone = $('#customer-phone').val();
            let customer_address = $('#customer-address').val();
            let cart = JSON.parse(localStorage.getItem('cart'));
            if(!cart) {
                $('.error').text('Bạn chưa có sản phẩm nào trong giỏ hàng');
                return;
            }
            if(customer_name.length <= 0 || customer_phone.length <= 0 || customer_address.length <= 0) {
                $('.error').text('Vui lòng nhập đầy đủ thông tin nhận hàng');
                $('#customer-name').focus();
                return;
            }
            // $('.error').text('');
            let orderSelectedProduct = $('input[name="check"]:checked').map(function () {
                let product_id = parseInt($(this).attr('data-product-id'));
                let product_variant_id = parseInt($(this).attr('data-product-variant-id'));
                for(let i = 0; i < cart.length; i++) {
                    if(cart[i].product_id === product_id && cart[i].product_variant_id === product_variant_id) {
                        return cart[i];
                    }
                }
            }).get();
            if(orderSelectedProduct.length === 0) {
                $('.error').text('Vui lòng chọn sản phẩm cần thanh toán');
                return;
            }
            localStorage.setItem('selectedItem', JSON.stringify(orderSelectedProduct));
            localStorage.setItem('customerInformation', JSON.stringify({
                customer_name : customer_name,
                customer_phone : customer_phone,
                customer_address : customer_address
            }));
            window.location.href = "{{ route('dashboard.confirm') }}";
        });
    </script>
@endsection