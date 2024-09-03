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
                                        <h1>Danh sách đơn hàng</h1>
                                    </div>
                                    <div class="content">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mã đơn hàng</th>
                                                <th scope="col">Tên khách hàng</th>
                                                <th scope="col">Số điện thoại</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Thời gian đặt</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td><a href="{{ route('admin.orders.edit', ['order_code' => $item['order_code']]) }}">{{ $item['order_code'] }}</a></td>
                                                    <td>{{ $item['customer_name'] }}</td>
                                                    <td>{{ $item['customer_phone'] }}</td>
                                                    <td>{{ $item->statusText($item['status']) }}</td>
                                                    <td>{{ number_format($item->total($item['order_code'])['total'], 0, ',', '.') }} đ</td>
                                                    <td>{{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $orders->links('pagination::bootstrap-4') }}
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