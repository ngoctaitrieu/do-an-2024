@extends('layouts.app')
@section('content')
    <style>
        #footer, #header, .dash-search, .dash-button__inner, .cart__item {
            display: none !important;
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
                                    <div class="title">
                                        <h1>Quản lý sản phẩm</h1>
                                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary mt-3">Thêm mới</a>
                                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Thời gian tạo</th>
                                                <th scope="col">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td><img src="{{ $item->getProductImage[0]['image_url'] }}"></td>
                                                    <td><a href="{{ route('admin.product.detail', ['slug' => $item['slug']]) }}">{{ $item['title'] }}</a></td>
                                                    <td><del>{{ number_format((int)$item['price_old'], 0, ',', '.') }}đ</del> <br> <span>{{ number_format((int)$item['price'], 0, ',', '.') }}đ</span></td>
                                                    <td>{{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.product.detail', ['slug' => $item['slug']]) }}" class="btn btn-primary">Edit</a>

                                                        <button type="button" class="btn btn-danger delete-product" data-id="{{ $item['id'] }}">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $products->links('pagination::bootstrap-4') }}
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
        $('.delete-product').on('click', function () {
            let product_id = $(this).attr('data-id');
            let current = $(this);
            Swal.fire({
                title: "Xác nhận",
                text: "Bạn có chắc muốn xóa sản phẩm này không?",
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
                        url: '{{ route('admin.product.delete') }}',
                        data: {
                            product_id : product_id,
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