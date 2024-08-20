@extends('layouts.app')
@section('content')
    <section class="ffc-login ffc-register">
        <div class="ffc-login__img">
            <figure>
                <img src="dist/images/register.png" alt="login">
            </figure>
        </div>
        <div class="ffc-login__content ffc-register__content">
            <div class="conatiner">
                <div class="ffc-login__form">
                    <form id="form-register" action="{{ route('register.create') }}" method="post">
                        @csrf
                        <div class="form-login">
                            <div class="title">
                                <h1>Đăng ký</h1>
                                <h2>Đăng nhập</h2>
                            </div>
                            <div class="login-input">
                                <input type="text" name="name" id="name" placeholder="Họ và tên *">
                                <input type="text" name="email" id="email" placeholder="Email *">
                                <input type="text" name="phone" id="phone" placeholder="Số điện thoại *">
                                <input type="password" name="password" id="password" placeholder="Mật khẩu *">
                                <input type="password" name="password_confirmation" id="" placeholder="Nhập lại mật khẩu *">
                                <button type="submit">Đăng ký</button>
                            </div>
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
        $('#form-register').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 255,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                password: {
                    required: true,
                },
                password_confirmation: {
                    equalTo: '#password',
                }
            },
            messages: {
                name: {
                    required: 'Trường này không được để trống.',
                    maxlength: 'Họ tên của bạn quá dài.',
                },
                email: {
                    required: 'Trường này không được để trống.',
                    email: 'Email không hợp lệ.',
                },
                phone: {
                    required: 'Trường này không được để trống.',
                    digits: 'Số điện thoại chỉ chứa các ký tự số.',
                    maxlength : 'Số điện thoại không hợp lệ.',
                    minlength: 'Số điện thoại không hợp lệ.'
                },
                password: {
                    required: 'Trường này không được để trống.',
                },
                password_confirmation: {
                    equalTo: 'Mật khẩu không trùng khớp.',
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endsection