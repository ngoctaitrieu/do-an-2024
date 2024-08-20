@extends('layouts.app')
@section('content')
    <section class="ffc-login">
        <div class="ffc-login__img">
            <figure>
                <img src="dist/images/login.png" alt="login">
            </figure>
        </div>
        <div class="ffc-login__content">
            <div class="container">
                <div class="ffc-login__form">
                    <form method="post" action="{{ route('login.login') }}" id="form-login">
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="form-login">
                            <div class="title">
                                <h1>Đăng nhập</h1>
                                <h2>Đăng ký</h2>
                            </div>
                            <div class="login-input">
                                <input type="text" name="email" id="" placeholder="Email">
                                <input type="password" name="password" id="" placeholder="Mật khẩu">
                                <button type="submit">Đăng nhập</button>
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                            {{--<div class="login-more">--}}
                                {{--<div class="login__detail">--}}
                                    {{--<span></span><h6>Đăng nhập với</h6><span></span>--}}
                                {{--</div>--}}
                                {{--<div class="login-social">--}}
                                    {{--<a href="#"><img src="dist/images/gg.svg" alt="gg"><span>Đăng nhập với tài khoản Google</span></a>--}}
                                    {{--<a href="#"><img src="dist/images/fb.svg" alt="fb"><span>Đăng nhập với tài khoản Facebook</span></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--JS--}}
@section('script')
    <script>
        $('#form-login').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                }
            },
            messages: {
                email: {
                    required: 'Trường này không được để trống.',
                    email: 'Email không hợp lệ.',
                },
                password: {
                    required: 'Trường này không được để trống.',
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endsection