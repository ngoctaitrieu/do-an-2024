@extends('layouts.app')
@section('content')
    <section class="ffc-link">
        <div class="container">
            <div class="ffc-link__page">
                <a href="/"><img src="{{ asset('dist/images/home-link.svg') }}" alt="home-link">Trang chủ</a>
                <span>|</span>
                <a class="curent-page">{{ $product['title'] }}</a>
            </div>
        </div>
    </section>
    <section class="ffc-detail-product">
        <div class="container">
            <div class="detai-product__content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-thumnail">
                            <div class="images-main swiper">
                                <div class="swiper-wrapper">
                                    @foreach($product->getProductImage as $item)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <figure><img src="{{ $item['image_url'] }}" alt=""></figure>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="images-thumnail swiper">
                                <div class="swiper-wrapper">
                                    @foreach($product->getProductImage as $item)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <figure><img src="{{ $item['image_url'] }}" alt=""></figure>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single__description">
                            <h1>{{ $product['title'] }}</h1>
                            <div class="rating">
                                <div class="list-star">
                                    @if($product->productReviews->count())
                                        @for($i = 0 ; $i < (int)($product->productReviews->sum('star') / $product->productReviews->count()) ; $i++)
                                            <i class="fas fa-star yellow"></i>
                                        @endfor
                                        @for($i = (int)($product->productReviews->sum('star') / $product->productReviews->count()) ; $i < 5 ; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    @else
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    @endif
                                </div>
                                <div class="rating-text">
                                    <span>(</span>
                                    <p>{{ $product->productReviews->count() }} đánh giá</p><span>)</span>
                                </div>
                            </div>
                            <div class="single-price">
                                <div class="price-info">
                                    <span class="sale">{{ number_format((int)$product['price'], 0, ',', '.') }} đ</span>
                                    <span class="old">{{ number_format((int)$product['price_old'], 0, ',', '.') }} đ</span>
                                </div>
                                <span class="label">25% OFF</span>
                            </div>
                            <div class="single-option">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Tình trạng hàng:</td>
                                        <td>Còn <span class="product-quantity">{{ $product_variant[0]['quantity'] }}</span> sản phẩm</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $variant['name'] }}</td>
                                        <td>
                                            <ul>
                                                @foreach($product_variant as $key => $item)
                                                <li class="select-variant @if($key == 0)checked @endif" data-id="{{ $item['id'] }}" data-name="{{ $item['name'] }}" data-quantity="{{ $item['quantity'] }}" data-variant="{{ $variant['name'] }}">{{ $item['name'] }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Số lượng:</td>
                                        <td>
                                            <div class="quanlity">
                                                <button class="minus"></button>
                                                <input type="number" name="qty" id="qty" min="1" max="100" value="1">
                                                <button class="plus"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="button-single">
                                    <button id="add-to-cart" data-id="{{ $product['id'] }}" data-image="{{ $product_images[0]['image_url'] }}" data-title="{{ $product['title'] }}" data-price="{{ $product['price'] }}"><img src="{{ asset('dist/images/cart.svg') }}" alt="">Thêm vào giỏ hàng</button>
                                    <button id="buy-now"><img src="{{ asset('dist/images/cart-1.svg') }}" alt="">Mua hàng</button>
                                </div>
                                <div class="error d-none"></div>
                            </div>
                            {{--<p>Miễn phí Vận chuyển Siêu tốc cho Platinum và Super VIP. Nâng cấp ngay. Dự kiến hàng về Việt--}}
                                {{--Nam 24-06-2021 - 27-06-2021</p>--}}
                        </div>
                    </div>
                </div>
                <div class="single-meta">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="meta-description">
                                <div class="meta-tab__title">
                                    <ul>
                                        <li>
                                            <h2>Mô tả sản phẩm</h2>
                                        </li>
                                    </ul>
                                </div>
                                <div class="meta-tab__description">
                                    <div class="tab-content">
                                        <div class="list-content">
                                            {!! $product['long_description'] !!}
                                        </div>
                                        {{--<a href="#" class="readmore">Xem thêm<img src="dist/images/down.svg" alt="down"></a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <h2>Phản hồi từ khách hàng</h2>
                                <div class="list-comment">
                                    @if(count($product->productReviews) > 0)
                                        @foreach($product->productReviews as $item)
                                            <div class="list-comment__item">
                                                <div class="rate">
                                                    <div class="star">
                                                        @for($i = 1 ; $i <= $item['star']; $i++)
                                                            <i class="fas fa-star yellow"></i>
                                                        @endfor
                                                        @for($i = $item['star'] + 1 ; $i <= 5; $i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                    </div>
                                                    <div class="date-time"><span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item['created_at'])->format('d/m/Y H:i:s') }}</span></div>
                                                </div>
                                                <h3>{{ $item->userReview['name'] }}</h3>
                                                <p>{{ $item['comment'] }}</p>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="no-review">Sản phẩm này chưa có đánh giá nào!</p>
                                    @endif
                                </div>
                                {{--<div class="parag">--}}
                                    {{--<a href="#">1</a>--}}
                                    {{--<a href="#">2</a>--}}
                                    {{--<a href="#"></a>--}}
                                {{--</div>--}}
                            </div>
                            <div class="write-comment">
                                <h3>Đánh giá của bạn</h3>
                                <div class="star">
                                    <i id="st1" class="fas fa-star"></i>
                                    <i id="st2" class="fas fa-star"></i>
                                    <i id="st3" class="fas fa-star"></i>
                                    <i id="st4" class="fas fa-star"></i>
                                    <i id="st5" class="fas fa-star"></i>
                                </div>
                                <form action="" id="form-review">
                                    <textarea name="" id="review-text" cols="30" rows="10" required></textarea>
                                    <button type="button" id="submit-review">Gửi đánh giá</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-nav">
                                <h2>Cam kết</h2>
                                <ul>
                                    <li><img src="{{ asset('dist/images/icon-1.svg') }}" alt="icon-1"><span>Giá bạn thấy bằng giá bạn
                                        mua</span></li>
                                    <li><img src="{{ asset('dist/images/icon-2.svg') }}" alt="icon-2"><span>Yên tâm mua sắm, giải toả rủi
                                        ro</span></li>
                                    <li><img src="{{ asset('dist/images/icon-3.svg') }}" alt="icon-3"><span>Hàng chất lượng, rõ nguồn
                                        gốc</span></li>
                                    <li><img src="{{ asset('dist/images/icon-4.svg') }}" alt="icon-4"><span>Sản phẩm nhập khẩu chính
                                        ngạch</span></li>
                                    <li><img src="{{ asset('dist/images/icon-5.svg') }}" alt="icon-5"><span>Miễn phí giao hàng HN,
                                        HCM</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-relate">
                    <h2>Sản phẩm liên quan</h2>
                    <div class="sw-relate swiper mySwiper1">
                        <div class="swiper-wrapper">
                            @foreach($product_list as $item)
                                <div class="swiper-slide">
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
                                                        <button class="checklogin d-none">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z" stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337" stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button class="add-to-favorite @if($item->userFavorited->count()) user-favorited @endif" data-id="{{ $item->id }}">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z" stroke="#292B2E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
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
                    <div class="swiper-button-next swiper-button-next-1"><i class="fal fa-angle-right"></i></div>
                    <div class="swiper-button-prev swiper-button-prev-1"><i class="fal fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--JS--}}
@section('script')
    <script>
        var mySwiper1 = new Swiper(".mySwiper1", {
            slidesPerView: 4,
            paginationClickable: true,
            spaceBetween: 20,
            loop: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.swiper-button-next-1',
                prevEl: '.swiper-button-prev-1',
            },
        });
        var mySwiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 5,
            paginationClickable: true,
            spaceBetween: 20,
            loop: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.swiper-button-next-2',
                prevEl: '.swiper-button-prev-2',
            },
        });
        $('body').on("click", '.plus', function () {
            let quantity = parseInt($(this).parent().find('input').val());
            $(this).parent().find('input').val(quantity + 1);
        });
        $('body').on("click", '.minus', function () {
            let quantity = parseInt($(this).parent().find('input').val());
            if(quantity > 1) {
                $(this).parent().find('input').val(quantity - 1);
            }
        });
        $('.select-variant').on('click', function () {
           let quantity = parseInt($(this).attr('data-quantity'));
           $('.product-quantity').text(quantity);
            $('.select-variant').removeClass('checked');
            $(this).addClass('checked');
        });
        // Thêm vào giỏ hàng
        $('#add-to-cart').on('click', function () {
            let quantity_remain = parseInt($('.select-variant.checked').attr("data-quantity"));
            let product_variant_id = parseInt($('.select-variant.checked').attr("data-id"));
            let product_variant_name = $('.select-variant.checked').attr("data-name");
            let variant_name = $('.select-variant.checked').attr("data-variant");
            let quantity = parseInt($('#qty').val());
            let product_id = parseInt($(this).attr('data-id'));
            let product_image = $(this).attr('data-image');
            let product_name = $(this).attr('data-title');
            let product_price = parseFloat($(this).attr('data-price'));
            if(quantity <= 0) {
                $('.error').removeClass('d-none').text('Vui lòng chọn số lượng sản phẩm muốn mua');
                return;
            }
            if(quantity > quantity_remain) {
                $('.error').removeClass('d-none').text('Số lượng sản phẩm trong kho không đủ');
                return;
            }
            let cart;
            if(localStorage.getItem('cart')) {
                cart = JSON.parse(localStorage.getItem('cart'));
            } else {
                cart = [];
            }
            // kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
            let check = true;
            for(let i = 0; i < cart.length; i++) {
                if(cart[i].product_id === product_id && cart[i].product_variant_id === product_variant_id) {
                    if((quantity + cart[i].quantity) > quantity_remain) {
                        $('.error').removeClass('d-none').text('Số lượng sản phẩm trong kho không đủ');
                        return;
                    }
                    check = false;
                    cart[i].quantity += quantity;
                }
            }
            if(check) {
                cart.push({
                    product_id : product_id,
                    name : product_name,
                    image : product_image,
                    price : product_price,
                    quantity : quantity,
                    product_variant_id : product_variant_id,
                    product_variant_name : product_variant_name,
                    variant_name : variant_name
                });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            showCartNumber();
        });
        // Rating
        let star = 0;
        $("#st1").click(function() {
            $(".write-comment .star .fa-star").css("color", "#212529");
            $("#st1").css("color", "#ffe053");
            star = 1;
        });
        $("#st2").click(function() {
            $(".write-comment .star .fa-star").css("color", "#212529");
            $("#st1, #st2").css("color", "#ffe053");
            star = 2;
        });
        $("#st3").click(function() {
            $(".write-comment .star .fa-star").css("color", "#212529")
            $("#st1, #st2, #st3").css("color", "#ffe053");
            star = 3;
        });
        $("#st4").click(function() {
            $(".write-comment .star .fa-star").css("color", "#212529");
            $("#st1, #st2, #st3, #st4").css("color", "#ffe053");
            star = 4;
        });
        $("#st5").click(function() {
            $(".write-comment .star .fa-star").css("color", "#212529");
            $("#st1, #st2, #st3, #st4, #st5").css("color", "#ffe053");
            star = 5;
        });
        $('#submit-review').on('click', function () {
            @if(!auth()->check())
                Swal.fire({
                    title: "Chưa đăng nhập",
                    text: "Bạn phải đăng nhập để có thể sử dụng chức năng này!!!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Đăng nhập",
                    cancelButtonText: "Hủy"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('login.index') }}';
                    }
                });
            @endif
            if(star === 0) {
                alert('Bạn chưa đánh giá sản phẩm!');
                return;
            }
            let comment = $('#review-text').val();
            if(comment.length <= 0) {
                alert('Bạn chưa nhập đánh giá về sản phẩm!');
                return;
            }

            $.ajax({
                type: 'post',
                dataType: 'json',
                cache: false,
                url: '{{ route('products.create') }}',
                data: {
                    product_id : '{{ $product['id'] }}',
                    star : star,
                    comment : comment,
                    "_token": "{{ csrf_token() }}",
                },
                beforeSend: function() {
                    $('#submit-review').css('opacity', 0.3);
                },
                success: function(response) {
                    $('#submit-review').css('opacity', 1);
                    if (response.status == 1) {
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                        });
                        $('.list-comment').prepend(response.html);
                        $('.no-review').remove();
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