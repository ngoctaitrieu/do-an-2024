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
            <!--      Content      -->
                <div class="main-content__content">
                    <div class="main-content__inner">
                        <div class="content">
                            <div class="list-order">
                                <div class="list-order__inner">
                                    <div class="title">
                                        <h1>Chi tiết đơn hàng <span></span></h1>
                                    </div>
                                    <div class="order-content">
                                        <div class="order-content__inner">
                                            <div class="order-table">
                                                <div class="order-item-product">
                                                    <div class="order-detail">
                                                        <div class="list-product">
                                                            @foreach($order_detail as $item)
                                                                @php
                                                                    $product_variant = \App\Models\ProductVariant::find($item['product_variant_id']);
                                                                    $variant = \App\Models\Variant::find($product_variant['variant_id']);
                                                                    $product = \App\Models\Product::find($product_variant['product_id']);
                                                                    $product_images = \App\Models\ProductImage::where('product_id', $product_variant['product_id'])->first();
                                                                @endphp
                                                                <div class="morth-item">
                                                                    <div class="morth-img">
                                                                        <figure>
                                                                            <img src="{{ $product_images['image_url'] }}" alt="">
                                                                        </figure>
                                                                        <div class="info">
                                                                            <h4>{{ $product['title'] }}</h4>
                                                                            <div class="type">
                                                                                <span>{{ $variant['name'] }}: {{ $product_variant['name'] }}</span>
                                                                                <span>Số lượng: {{ $item['quantity'] }}</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="morth-price">
                                                                        <strong>{{ number_format($item['price'], 0, ',', '.') }} đ</strong>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="list-info">
                                                            <div class="info__left">
                                                                <ul>
                                                                    <li>
                                                                        <span>Mã đơn hàng:</span>
                                                                        <strong>{{ $order['order_code'] }}</strong>
                                                                    </li>
                                                                    <li>
                                                                        <span>Họ và tên:</span>
                                                                        <strong>{{ $order['customer_name'] }}</strong>
                                                                    </li>
                                                                    {{--<li>--}}
                                                                        {{--<span>Phương thức vận chuyển:</span>--}}
                                                                        {{--<strong>{{ $order['customer_name'] }}</strong>--}}
                                                                    {{--</li>--}}
                                                                    <li>
                                                                        <span>Số điện thoại:</span>
                                                                        <strong>{{ $order['customer_phone'] }}</strong>
                                                                    </li>
                                                                    <li>
                                                                        <span>Phương thức thanh toán:</span>
                                                                        <strong>{{ $order->paymentMethodText($order['payment_method']) }}</strong>
                                                                    </li>
                                                                    <li>
                                                                        <span>Tình trạng thanh toán:</span>
                                                                        <strong>{{ $order->paymentStatusText($order['payment_status']) }}</strong>
                                                                    </li>
                                                                    <li>
                                                                        <span>Địa chỉ:</span>
                                                                        <strong>{{ $order['customer_address'] }}</strong>
                                                                    </li>
                                                                    {{--<li>--}}
                                                                        {{--<span>Thời gian giao dự kiến :</span>--}}
                                                                        {{--<strong></strong>--}}
                                                                    {{--</li>--}}
                                                                </ul>
                                                            </div>
                                                            <div class="info__right">
                                                                <ul>
                                                                    <li>
                                                                        <span>Tạm tính:</span>
                                                                        <strong>{{ number_format($order->total($order['order_code'])['total'], 0, ',', '.') }} đ</strong>
                                                                    </li>
                                                                    {{--<li>--}}
                                                                        {{--<span>Phí vận chuyển:</span>--}}
                                                                        {{--<strong>2.88888 đ</strong>--}}
                                                                    {{--</li>--}}
                                                                    <li>
                                                                        <span>Giảm giá:</span>
                                                                        <strong>0 đ</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="order-status">
                                                        <div class="st-main">
                                                            <div class="st-left">
                                                                <div class="status">
                                                                    <span>Trạng thái:</span>
                                                                    {{ $order->statusText($order['status']) }}
                                                                </div>
                                                                @if($order['status'] == 1 || $order['status'] == 2)
                                                                    <button type="button" class="order-cancel" data-id="{{ $order['order_code'] }}">Huỷ đơn hàng</button>
                                                                @endif
                                                            </div>
                                                            <div class="st-right">
                                                                <span>Thành tiền:</span>
                                                                <strong>{{ number_format($order->total($order['order_code'])['total'], 0, ',', '.') }} đ</strong>
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

            </div>
        </div>
    </section>
@endsection
{{--JS--}}
@section('script')
    <script>
        $('.order-cancel').on('click', function () {
            let order_code = $(this).attr('data-id');
            $.ajax({
                type: 'post',
                dataType: 'json',
                cache: false,
                url: '{{ route('dashboard.cancel') }}',
                data: {
                    order_code : order_code,
                    "_token": "{{ csrf_token() }}",
                },
                beforeSend: function() {
                    $('.order-cancel').css('opacity', 0.3);
                },
                success: function(response) {
                    $('.order-cancel').css('opacity', 1);
                    if (response.status == 1) {
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                        });
                        $('.order-cancel').parent().find('.status').html('<span>Trạng thái:</span> Đã hủy');
                        $('.order-cancel').remove();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: response.message,
                        });
                    }
                }
            });
        });
    </script>
@endsection