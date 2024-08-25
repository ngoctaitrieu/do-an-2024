@extends('layouts.app')
@section('content')
    <section class="ffc-link">
        <div class="container">
            <div class="ffc-link__page">
                <a href="/"><img src="{{ asset('dist/images/home-link.svg') }}" alt="home-link">Trang chủ</a>
                <span>|</span>
                <a href="#">Danh mục sản phẩm</a>
                <span>|</span>
                <span class="curent-page">@if(isset($category_sub)) {{ $category_sub['name'] }} @else {{ $category['name'] }} @endif</span>
            </div>
        </div>
    </section>
    <section class="ffc-list__product">
        <div class="container">
            <div class="ffc-list-product__content">
                <div class="sort-bar">
                    <span>Sắp xếp theo:</span>
                    <div class="select-sort">
                        <select id="filterByTime">
                            <option value="">Tất cả</option>
                            <option value="DESC" @if(isset($_GET['time']) && $_GET['time'] == 'DESC') selected @endif>Mới nhất</option>
                            <option value="ASC" @if(isset($_GET['time']) && $_GET['time'] == 'ASC') selected @endif>Cũ nhất</option>
                            {{--<option value="2">Mua nhiều nhất</option>--}}
                        </select>
                    </div>
                    <div class="select-sort">
                        <select id="filterByPrice">
                            <option value="">Tất cả</option>
                            <option value="ASC" @if(isset($_GET['price']) && $_GET['price'] == 'ASC') selected @endif>Giá từ thấp đến cao</option>
                            <option value="DESC" @if(isset($_GET['price']) && $_GET['price'] == 'DESC') selected @endif>Giá từ cao đến thấp</option>
                        </select>
                    </div>
                </div>
                <div class="list-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav-left">
                                <div class="item">
                                    <div class="title">
                                        <h2>{{ $category['name'] }}</h2>
                                        <figure><img src="{{ asset('dist/images/ipro-1.svg') }}" alt=""></figure>
                                    </div>
                                    <div class="list-category">
                                        <ul>
                                            <li><a href="{{ route('products.index2', $category['slug']) }}" style="@if(!isset($category_sub)) color: var(--cl-red); @endif">Tất cả sản phẩm</a></li>
                                            @foreach($category_sub_list as $item)
                                                <li><a href="{{ route('products.index', ['category' => $item->category['slug'], 'category_sub' => $item['slug']]) }}" style="@if(isset($category_sub) && $category_sub['id'] == $item['id']) color: var(--cl-red); @endif">{{ $item['name'] }}</a></li>
                                            @endforeach
                                            {{--<li><a href="#">Ti vi</a></li>--}}
                                            {{--<li><a href="#">Tủ lạnh</a></li>--}}
                                            {{--<li><a href="#">Điền hoà</a></li>--}}
                                            {{--<li><a href="#">Máy giặt</a></li>--}}
                                            {{--<li><a href="#">Máy sấy</a></li>--}}
                                            {{--<li><a href="#">Nồi cơm điện</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="title">
                                        <h2>Lọc theo</h2>
                                        <figure><img src="{{ asset('dist/images/ipro-2.svg') }}" alt=""></figure>
                                    </div>
                                    <div class="sort-price">
                                        <form action="" class="price-form">
                                            <span>Giá sản phẩm</span>
                                            <div class="input-price">
                                                <input type="number" id="price-start" value="@if(isset($_GET['priceStart'])){{ (int)$_GET['priceStart'] }}@endif" placeholder="0" required>
                                                <input type="number" id="price-end" value="@if(isset($_GET['priceEnd'])){{ (int)$_GET['priceEnd'] }}@endif" placeholder="99.000.000" required>
                                            </div>
                                            <button class="filterByPriceRange">Lọc theo giá</button>
                                        </form>
                                    </div>
                                    {{--<div class="list-brand">--}}
                                        {{--<h2>Thương hiệu</h2>--}}
                                        {{--<div class="brand">--}}
                                            {{--<form action="">--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="1" name="1" value="1">--}}
                                                    {{--<label for="1">Sony</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="2" name="2" value="2">--}}
                                                    {{--<label for="2">Lenovo</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="3" name="3" value="3">--}}
                                                    {{--<label for="3">Jonson & Handson</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="4" name="4" value="4">--}}
                                                    {{--<label for="4">Apple</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="5" name="5" value="5">--}}
                                                    {{--<label for="5">Google</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="check-list">--}}
                                                    {{--<input type="checkbox" id="6" name="6" value="6">--}}
                                                    {{--<label for="6">Uniliver</label>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="list-product">
                                <div class="row">
                                    @if(count($products))
                                        @foreach($products as $item)
                                            <div class="col-6 col-sm-4 col-xl-3 p-10">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product__img">
                                                            <a href="{{ route('products.detail', $item->slug) }}" class="img">
                                                                <span class="label">25% OFF</span>
                                                                <figure><img src="{{ $item->getProductImage[0]['image_url'] }}" alt="pro-1"></figure>
                                                            </a>
                                                        </div>
                                                        <div class="product__content">
                                                            <div class="product__content__title">
                                                                <h3><a href="{{ route('products.detail', $item->slug) }}">{{ $item['title'] }}</a>
                                                                </h3>
                                                            </div>
                                                            <div class="product__content__price">
                                                                <span class="price-old">{{ number_format((int)$item['price'], 0, ',', '.') }} đ</span>
                                                                <span class="price-sale">{{ number_format((int)$item['price_old'], 0, ',', '.') }} đ</span>
                                                            </div>
                                                            <div class="product__content__meta-info">
                                                                <a href="{{ route('products.detail', $item->slug) }}">Mua ngay</a>
                                                                <div class="bnt-info">
                                                                    <button>
                                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                                  stroke="#292B2E" stroke-width="1.2"
                                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                            <path d="M8.86133 1.16663L10.973 3.28413"
                                                                                  stroke="#292B2E" stroke-width="1.2"
                                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                            <path
                                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                                            <path
                                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                                    stroke-linecap="round">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button>
                                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                                d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                                stroke="#292B2E" stroke-width="1.2"
                                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Không có sản phẩm nào !</p>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="parag">--}}
                                {{--<a href="#"></a>--}}
                                {{--<a href="#">1</a>--}}
                                {{--<a href="#">2</a>--}}
                                {{--<a href="#" class="curent">3</a>--}}
                                {{--<a href="#">4</a>--}}
                                {{--<a href="#">5</a>--}}
                                {{--<a href="#"></a>--}}
                            {{--</div>--}}
                            {{ $products->links('pagination::bootstrap-4') }}
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
        let time = 'DESC';
        let price = 'DESC';
        let searchPara = '';
        let priceStart = @if(isset($_GET['priceStart'])) {{ (int)$_GET['priceStart'] }} @endif;
        let priceEnd = @if(isset($_GET['priceEnd'])) {{ (int)$_GET['priceEnd'] }} @endif;
        $('#filterByTime').on('change', function () {
            time = $(this).val();
            searchPara = '?time=' + time;
            if(priceStart >= 0 && priceEnd > 0) {
                searchPara += '&&priceStart=' + priceStart + '&&priceEnd=' + priceEnd;
            }
            search(searchPara);
        });
        $('#filterByPrice').on('change', function () {
            price = $(this).val();
            searchPara = '?price=' + price;
            if(priceStart >= 0 && priceEnd > 0) {
                searchPara += '&&priceStart=' + priceStart + '&&priceEnd=' + priceEnd;
            }
            search(searchPara);
        });
        $('.filterByPriceRange').on('click', function () {
            priceStart = parseInt($('#price-start').val());
            priceEnd = parseInt($('#price-end').val());
            if(priceStart >= 0 && priceEnd > 0) {
                searchPara = '?priceStart=' + priceStart + '&&priceEnd=' + priceEnd;
                search(searchPara);
            }
        });
        $('.price-form').submit(function (e) {
            e.preventDefault();
        });
        function search(searchPara) {
            window.location.href = encodeURI(searchPara);
        }
    </script>
@endsection