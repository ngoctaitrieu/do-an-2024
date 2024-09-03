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
                                <h1>Yêu thích</h1>
                                {{--<a href="#">Xoá tất cả</a>--}}
                            </div>
                            <div class="form-content f-like">
                                <div class="row">
                                    @foreach($user_favorite as $item)
                                        {{--@dd($item->productFavorite)--}}
                                        <div class="col-6 col-sm-4 col-xl-3 p-10">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product__img">
                                                        <a href="{{ route('products.detail', $item->productFavorite->slug) }}" class="img">
                                                            <span class="label d-none">25% OFF</span>
                                                            <figure><img src="{{ $item->productFavorite->getProductImage[0]['image_url'] }}" alt="pro-1"></figure>
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__content__title">
                                                            <h3><a href="{{ route('products.detail', $item->productFavorite->slug) }}">{{ $item->productFavorite->title }}</a></h3>
                                                        </div>
                                                        <div class="product__content__price">
                                                            <span class="price-old">{{ number_format((int)$item->productFavorite->price, 0, ',', '.') }} đ</span>
                                                            <span class="price-sale">{{ number_format((int)$item->productFavorite->price_old, 0, ',', '.') }} đ</span>
                                                        </div>
                                                        <div class="product__content__meta-info">
                                                            <a href="{{ route('products.detail', $item->productFavorite->slug) }}">Mua ngay</a>
                                                            <div class="bnt-info">
                                                                <button class="d-none">
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
                                                                <button class="add-to-favorite @if($item->productFavorite->userFavorited->count()) user-favorited @endif" data-id="{{ $item->productFavorite->id }}">
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