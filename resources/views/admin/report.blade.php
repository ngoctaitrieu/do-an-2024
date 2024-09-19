@extends('layouts.app')
@section('content')
    <style>
        #footer, #header, .dash-search, .dash-button__inner, .cart__item {
            display: none !important;
        }
    </style>
    <section class="ffc-dashboard dashboard-admin dashboard-report">
        @include('layouts.sidebar-admin')
        <div class="main-content">
            <div class="main-content__inner">
                @include('layouts.header-das')
                <div class="main-content__content">
                    <div class="main-content__inner" style="padding-right: 50px">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content">
                                    <h1>Báo cáo, thống kê</h1>
                                    <div class="number-list">
                                        <div class="number-item">
                                            <figure>
                                                <img src="{{ asset('dist/images/item-quantity.png') }}">
                                            </figure>
                                            <div>
                                                <div class="item-text">Số đơn hàng</div>
                                                <div class="item-number-quantity">{{ $quantity }}</div>
                                            </div>
                                        </div>
                                        <div class="number-item">
                                            <figure>
                                                <img src="{{ asset('dist/images/item-price.png') }}">
                                            </figure>
                                            <div>
                                                <div class="item-text">Doanh thu</div>
                                                <div class="item-number-price">{{ number_format((int)$prices, 0, ',', '.') }}đ</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sort-container">
                                        <form method="get">
                                            <label for="start">Từ ngày:</label>
                                            <input type="date" name="start" id="start">
                                            <label for="end">Đến ngày:</label>
                                            <input type="date" name="end" id="end">
                                            <button class="btn btn-primary">Tìm kiếm</button>
                                        </form>
                                    </div>
                                    <div id="chart"></div>
                                    <div class="hot-products">
                                        <h2>Sản phẩm bán chạy</h2>
                                        <div class="products">
                                            @foreach($hot_products as $item)
                                                @php
                                                    $item = \App\Models\Product::find($item['id']);
                                                @endphp
                                            <div class="product">
                                                <img src="{{ $item->getProductImage[0]['image_url'] }}">
                                                <span class="title">{{ $item['title'] }}</span>
                                            </div>
                                            @endforeach
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                name: "Doanh thu",
                data: @json($price_list)
            }],
            chart: {
                type: 'area',
                height: 350,
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },

            title: {
                text: 'Thống kê doanh thu theo thời gian',
                align: 'left'
            },
            subtitle: {
                text: '',
                align: 'left'
            },
            labels: @json($dates),
            xaxis: {
                type: 'datetime',
            },
            yaxis: {
                opposite: true
            },
            legend: {
                horizontalAlign: 'left'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection