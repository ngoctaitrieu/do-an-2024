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
                            <div class="title">
                                <h1 class="title-cart">Quản lý đơn hàng</h1>
                            </div>
                            <div class="form-content f-cart f-payment">
                                <div class="cart-inner">
                                    <div class="cart-left payment-1">
                                        <form action="">
                                            <div class="table-cart">
                                                <div class="table-inner">
                                                    <div class="table-content">
                                                        <div class="table-label">
                                                            <div class="del">
                                                                <div class="del-check">
                                                                    <label for="check-all">Mã đơn hàng</label>
                                                                </div>
                                                            </div>
                                                            <div class="more-col">
                                                                <div class="col-title remove">
                                                                    <h4>Trạng thái</h4>
                                                                </div>
                                                                <div class="col-title price">
                                                                    <h4>Tổng tiền</h4>
                                                                </div>
                                                                <div class="col-title remove">
                                                                    <h4>Thao tác</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="table-main">
                                                            <div class="show-cart">
                                                                @if(count($orders) > 0)
                                                                    @foreach($orders as $item)
                                                                        <div class="li-item">
                                                                            <div class="col-first">
                                                                                <div class="thumbnail">
                                                                                    <div class="">
                                                                                        <a href="{{ route('dashboard.orderDetail', ['order_code' => $item['order_code']]) }}">
                                                                                            <span>{{ $item['order_code'] }}</span> -
                                                                                            <span>Ngày đặt: {{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</span><br>
                                                                                            <span>Thanh toán: {{ $item->paymentMethodText($item['payment_method']) }}</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-main">
                                                                                <div class="price">
                                                                                            <span>
                                                                                            <?php
                                                                                                echo 'Đang xử lý';
                                                                                            ?>
                                                                                            </span>
                                                                                </div>
                                                                                <div class="price">
                                                                                    <span><span class="price-total-one-210-0-"> {{ number_format($item->total($item['order_code'])['total'], 0, ',', '.') }} </span>đ</span>
                                                                                </div>
                                                                                <div class="remove">
                                                                                    <a href="{{ route('dashboard.orderDetail', ['order_code' => $item['order_code']]) }}" class="delete-item" data-id="210-0-">
                                                                                        Chi tiết
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <p>Bạn chưa có đơn hàng nào.</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="list-order">
                                <div class="list-order__inner">
                                    <div class="order-content">
                                        <div class="order-content__inner">
                                            <div class="parag d-none">
                                                <a href="#"></a>
                                                <a href="#">1</a>
                                                <a href="#">2</a>
                                                <a href="#" class="curent">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#"></a>
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

    </script>
@endsection