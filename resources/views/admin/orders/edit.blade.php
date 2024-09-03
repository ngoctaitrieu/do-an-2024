@extends('layouts.app')
@section('content')
    <style>
        #footer, #header, .dash-search, .dash-button__inner, .cart__item {
            display: none !important;
        }
        .ck-editor__editable_inline {
            height: 500px;
        }
    </style>
    <section class="ffc-dashboard dashboard-admin">
        @include('layouts.sidebar-admin')
        <div class="main-content">
            <div class="main-content__inner">
                @include('layouts.header-das')
                <div class="main-content__content">
                    <div class="main-content__inner" style="padding-right: 50px">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content">
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="title">
                                        <h1>Chi tiết đơn hàng</h1>
                                    </div>
                                    <div class="content">
                                        <form action="{{ route('admin.orders.update', ['order_code' => $order->order_code]) }}" method="post">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Mã đơn hàng</label>
                                                <input type="text" class="form-control" value="{{ $order->order_code }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Tên khách hàng</label>
                                                <input type="text" class="form-control" value="{{ $order->customer_name }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" value="{{ $order->customer_phone }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" value="{{ $order->customer_address }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Trạng thái đơn hàng</label>
                                                <select class="form-control" name="status">
                                                    <option value="1" @if($order->status == 1)selected @endif>Chờ xác nhận</option>
                                                    <option value="2" @if($order->status == 2)selected @endif>Chờ lấy hàng</option>
                                                    <option value="3" @if($order->status == 3)selected @endif>Đang giao hàng</option>
                                                    <option value="4" @if($order->status == 4)selected @endif>Đã giao hàng</option>
                                                    <option value="5" @if($order->status == 5)selected @endif>Đã hủy</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Phương thức thanh toán</label>
                                                <input type="text" class="form-control" value="{{ $order->paymentMethodText($order->payment_method) }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Tình trạng thanh toán</label>
                                                <select class="form-control" name="payment_status">
                                                    <option value="1" @if($order->payment_status == 1)selected @endif>Chưa thanh toán</option>
                                                    <option value="2" @if($order->payment_status == 2)selected @endif>Đã thanh toán</option>
                                                    <option value="3" @if($order->payment_status == 3)selected @endif>Đã hủy</option>
                                                </select>
                                            </div>
                                            <h1>Thông tin chi tiết</h1>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Hình ảnh</th>
                                                    <th scope="col">Tên sản phẩm</th>
                                                    <th scope="col">Biến thể</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Tổng</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($order_detail as $key => $item)
                                                    @php
                                                        $product_variant = \App\Models\ProductVariant::find($item['product_variant_id']);
                                                        $variant = \App\Models\Variant::find($product_variant['variant_id']);
                                                        $product = \App\Models\Product::find($product_variant['product_id']);
                                                        $product_images = \App\Models\ProductImage::where('product_id', $product_variant['product_id'])->first();
                                                    @endphp
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td><img src="{{ $product_images['image_url'] }}"></td>
                                                        <td>{{ $product['title'] }}</td>
                                                        <td>{{ $variant['name'] }}: {{ $product_variant['name'] }}</td>
                                                        <td>{{ number_format($item['price'], 0, ',', '.') }} đ</td>
                                                        <td>{{ $item['quantity'] }}</td>
                                                        <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} đ</td>
                                                    </tr>
                                                @endforeach
                                                    <tr>
                                                       <td colspan="7" style="text-align: right"><strong>Tạm tính : {{ number_format($order->total($order['order_code'])['total'], 0, ',', '.') }} đ</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" style="text-align: right"><strong>Giảm giá : 0 đ</strong></td>
                                                    </tr>
                                                <tr>
                                                    <td colspan="7" style="text-align: right"><strong>Tổng cộng : {{ number_format($order->total($order['order_code'])['total'], 0, ',', '.') }} đ</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary mt-3">Cập nhật</button>
                                        </form>
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