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
                                    <div class="category-parent-container">
                                        <div class="title">
                                            <h1>Danh mục cha</h1>
                                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary mt-1">Thêm mới</a>
                                        </div>
                                        <div class="content">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Tên danh mục</th>
                                                        <th scope="col">Đường dẫn</th>
                                                        <th scope="col">Thời gian tạo</th>
                                                        <th scope="col">Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($category as $key => $item)
                                                        <tr>
                                                            <th scope="row">{{ $key + 1 }}</th>
                                                            <td><a href="">{{ $item['name'] }}</a></td>
                                                            <td>{{ $item['slug'] }}</td>
                                                            <td>{{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.category.edit', ['id' => $item['id']]) }}" class="btn btn-primary">Sửa</a>

                                                                <button type="button" class="btn btn-danger delete-category" data-id="{{ $item['id'] }}">Xóa</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="category-children-container mt-5">
                                        <div class="title">
                                            <h1>Danh mục con</h1>
                                            <a href="{{ route('admin.category-sub.create') }}" class="btn btn-primary mt-1">Thêm mới</a>
                                        </div>
                                        <div class="content">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Hình ảnh</th>
                                                    <th scope="col">Tên danh mục</th>
                                                    <th scope="col">Đường dẫn</th>
                                                    <th scope="col">Thời gian tạo</th>
                                                    <th scope="col">Thao tác</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($category_sub as $key => $item)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td><img src="{{ $item['image'] }}"></td>
                                                        <td><a href="">{{ $item['name'] }}</a></td>
                                                        <td>{{ $item['slug'] }}</td>
                                                        <td>{{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.category-sub.edit', ['id' => $item['id']]) }}" class="btn btn-primary">Sửa</a>

                                                            <button type="button" class="btn btn-danger delete-category-sub" data-id="{{ $item['id'] }}">Xóa</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
    <script>
        $('.delete-category').on('click', function () {
           let category_id = $(this).attr('data-id');
           let current = $(this);
            Swal.fire({
                title: "Xác nhận",
                text: "Bạn có chắc muốn xóa danh mục này không?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        cache: false,
                        url: '{{ route('admin.category.delete') }}',
                        data: {
                            category_id : category_id,
                            "_token": "{{ csrf_token() }}",
                        },
                        beforeSend: function() {

                        },
                        success: function(response) {
                            if(response.status == 1) {
                                current.parents('tr').remove();
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
        });
        $('.delete-category-sub').on('click', function () {
            let category_sub_id = $(this).attr('data-id');
            let current = $(this);
            Swal.fire({
                title: "Xác nhận",
                text: "Bạn có chắc muốn xóa danh mục này không?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        cache: false,
                        url: '{{ route('admin.category-sub.delete') }}',
                        data: {
                            category_sub_id : category_sub_id,
                            "_token": "{{ csrf_token() }}",
                        },
                        beforeSend: function() {

                        },
                        success: function(response) {
                            if(response.status == 1) {
                                current.parents('tr').remove();
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
        });
    </script>
@endsection