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
                        <div class="row">
                            <div class="col-md-8">
                                <div class="content">
                                    <div class="title">
                                        <h1>Yêu thích</h1>
                                    </div>
                                    <div class="form-content">
                                        <form action="">
                                            <div class="form-group">
                                                <h2>Thông tin đăng nhập</h2>
                                                <div class="col-info">
                                                <span>
                                                    <label for="tel">Số điện thoại</label>
                                                    <input type="text" name="tel" id="tel" placeholder="{{ auth()->user()->phone }}">
                                                </span>
                                                    <span>
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email"
                                                           placeholder="{{ auth()->user()->email }}">
                                                </span>
                                                </div>
                                                <span>
                                                {{--<label for="pass">Mật khẩu</label>--}}
                                                {{--<input type="password" name="pass" id="pass" placeholder="**********">--}}
                                            </span>
                                                <button type="button" class="re__pass">Đổi mật khẩu</button>
                                            </div>
                                            <div class="form-group">
                                                <h2>Thông tin cá nhân</h2>
                                                <div class="col-info">
                                                <span>
                                                    <label for="name">Họ và tên <span>*</span></label>
                                                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}">
                                                </span>
                                                    <span>
                                                    <label for="birthday">Ngày sinh</label>
                                                    <input type="date" name="birthday" id="birthday" value="{{ auth()->user()->date_of_birth }}">
                                                </span>
                                                </div>
                                                <span>
                                                <label for="male">Giới tính</label>
                                                <select name="male" id="male">
                                                    <option value="Nam" @if(auth()->user()->gender == 'Nam') selected @endif>Nam</option>
                                                    <option value="Nữ" @if(auth()->user()->gender == 'Nữ') selected @endif>Nữ</option>
                                                </select>
                                            </span>
                                                <button type="button" class="save-information">Lưu thông tin</button>
                                            </div>
                                            {{--<div class="form-group">--}}
                                                {{--<h2>Địa chỉ nhận hàng mặc định</h2>--}}
                                                {{--<div class="col-info">--}}
                                                {{--<span>--}}
                                                    {{--<label for="rename">Họ và tên <span>*</span></label>--}}
                                                    {{--<input type="text" name="rename" id="rename" value="Nguyễn Anh">--}}
                                                {{--</span>--}}
                                                    {{--<span>--}}
                                                    {{--<label for="retel">Ngày sinh</label>--}}
                                                    {{--<input type="text" name="retel" id="retel" value="0393545958">--}}
                                                {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<span class="cm-100">--}}
                                                {{--<label for="adress">Địa chỉ nhận hàng</label>--}}
                                                {{--<input type="text" name="adress" id="adress"--}}
                                                       {{--value="Số 15 Tố Hữu, Nam Từ Liêm, Hà Nội">--}}
                                            {{--</span>--}}
                                                {{--<div class="col-select">--}}
                                                {{--<span>--}}
                                                    {{--<label for="city">Tỉnh/Thành phố<span>*</span></label>--}}
                                                    {{--<select name="city" id="city">--}}
                                                        {{--<option value="1">Hà Nội</option>--}}
                                                        {{--<option value="2">Thành phố Hồ Chí Minh</option>--}}
                                                    {{--</select>--}}
                                                {{--</span>--}}
                                                    {{--<span>--}}
                                                    {{--<label for="cicty-1">Quận/Huyện<span>*</span></label>--}}
                                                    {{--<select name="city-1" id="city-1">--}}
                                                        {{--<option value="1">Nam Từ Liêm</option>--}}
                                                        {{--<option value="2">Bắc Từ Liêm</option>--}}
                                                    {{--</select>--}}
                                                {{--</span>--}}
                                                    {{--<span>--}}
                                                    {{--<label for="city-2">Quận/Huyện<span>*</span></label>--}}
                                                    {{--<select name="city-2" id="city-2">--}}
                                                        {{--<option value="1">Tố Hữu</option>--}}
                                                        {{--<option value="2">Vạn Phúc</option>--}}
                                                    {{--</select>--}}
                                                {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<span class="checkform">--}}
                                                {{--<input type="checkbox" name="ggh" id="ggh">--}}
                                                {{--<label for="ggh">Giao giờ hành chính</label>--}}
                                            {{--</span>--}}
                                                {{--<button class="main-submit">Lưu địa chỉ</button>--}}
                                            {{--</div>--}}
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
        $('.re__pass').on('click', function () {
           $('.popup__repass').fadeIn();
           $('.bg__overlay').fadeIn();
        });
        $('.bg__overlay').on('click', function () {
            $('.popup__repass').fadeOut();
            $('.bg__overlay').fadeOut();
        });
        $('#forgot-password').validate({
            rules: {
                currentPassword: {
                    required: true,
                },
                newPassword: {
                    required: true,
                },
                newPasswordConfirm: {
                    required: true,
                    equalTo: '#new-password',
                }
            },
            messages: {
                currentPassword: {
                    required: 'Trường này không được để trống.',
                },
                newPassword: {
                    required: 'Trường này không được để trống.',
                },
                newPasswordConfirm: {
                    required: 'Trường này không được để trống.',
                    equalTo: 'Mật khẩu không trùng khớp.',
                },
            },
            submitHandler: function(form) {
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    cache: false,
                    url: '{{ route('dashboard.changePassword') }}',
                    data: {
                        current_password : $('#current-password').val(),
                        new_password : $('#new-password').val(),
                        new_password_confirm : $('#new-password-confirm').val(),
                        "_token": "{{ csrf_token() }}",
                    },
                    beforeSend: function() {
                        $('#forgot-password button').css('opacity', 0.3);
                    },
                    success: function(response) {
                        $('#forgot-password button').css('opacity', 1);
                        if (response.status == 1) {
                            Swal.fire({
                                icon: 'success',
                                text: response.message,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: response.message,
                            });
                        }
                    }
                });
            }
        });
        $('.save-information').on("click", function () {
           let gender =  $('#male').val();
           let date_of_birth = $('#birthday').val();
           let name = $('#name').val();
            $.ajax({
                type: 'post',
                dataType: 'json',
                cache: false,
                url: '{{ route('dashboard.updateInformation') }}',
                data: {
                    gender : gender,
                    date_of_birth : date_of_birth,
                    name : name,
                    "_token": "{{ csrf_token() }}",
                },
                beforeSend: function() {
                    $('.save-information').css('opacity', 0.3);
                },
                success: function(response) {
                    $('.save-information').css('opacity', 1);
                    if (response.status == 1) {
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                        });
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