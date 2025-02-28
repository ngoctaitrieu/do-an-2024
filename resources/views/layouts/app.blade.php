<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('dist/images/logo.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FangFangChoice') }}</title>


    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('dist/lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/lib/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
<body>
@include('layouts.header')
<main>
    @yield('content')
</main>
@include('layouts.footer')

<script src="{{ asset('dist/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/lib/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dist/lib/slick/slick.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.validate.js') }}"></script>
<script src="{{ asset('dist/js/sweetalert2.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
<script>
    // Show cart
    showCartNumber();
    function showCartNumber() {
        let cart;
        if(localStorage.getItem('cart')) {
            cart = JSON.parse(localStorage.getItem('cart'));
        } else {
            cart = [];
        }
        $('.qty__cart').text(cart.length);
    }
    $('body').on("click", '.add-to-favorite', function () {
       let product_id = $(this).attr('data-id');
       if($(this).hasClass('user-favorited')) {
           $(this).removeClass('user-favorited');
       } else {
           $(this).addClass('user-favorited');
       }
        $.ajax({
            type: 'post',
            dataType: 'json',
            cache: false,
            url: '{{ route('favorite.create') }}',
            data: {
                product_id : product_id,
                "_token": "{{ csrf_token() }}",
            },
            beforeSend: function() {

            },
            success: function(response) {

            }
        });
    });
</script>
@yield('script')
</body>
</html>
