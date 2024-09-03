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
                                        <div class="title">
                                            <h1>Danh sách biến thể</h1>
                                            <a href="{{ route('admin.variants.create') }}" class="btn btn-primary mt-1">Thêm mới</a>
                                        </div>
                                        <div class="content">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên biến thể</th>
                                                    <th scope="col">Thời gian tạo</th>
                                                    <th scope="col">Thao tác</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($variants as $key => $item)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td><a href="">{{ $item['name'] }}</a></td>
                                                        <td>{{ \Illuminate\Support\Carbon::parse($item['created_at'])->format('d/m/Y H:i') }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.variants.edit', ['id' => $item['id']]) }}" class="btn btn-primary">Sửa</a>

                                                            <button type="button" class="btn btn-danger delete-variant" data-id="{{ $item['id'] }}">Xóa</button>
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
    </section>
@endsection
{{--JS--}}
@section('script')
    <script>
        $('.delete-variant').on('click', function () {
            let variant_id = $(this).attr('data-id');
            let current = $(this);
            Swal.fire({
                title: "Xác nhận",
                text: "Bạn có chắc muốn xóa biến thể này không?",
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
                        url: '{{ route('admin.variants.delete') }}',
                        data: {
                            variant_id : variant_id,
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