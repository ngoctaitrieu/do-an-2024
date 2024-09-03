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
                                    <div class="title">
                                        <h1>Thêm mới sản phẩm</h1>
                                    </div>
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
                                    <form class="row g-3" id="product-detail" method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="title" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="title" id="title" value="" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="slug" class="form-label">Đường dẫn</label>
                                            <input type="text" class="form-control" id="slug" name="slug" value="" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="category_sub" class="form-label">Danh mục</label>
                                            <select class="form-control" name="category_sub">
                                                @foreach($category_sub as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="description" class="form-label">Thông tin sản phẩm</label>
                                            <textarea class="form-control" name="description" id="description"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="price-old" class="form-label">Giá cũ</label>
                                            <input type="number" class="form-control" name="price_old" id="price-old" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="price" class="form-label">Giá thực tế</label>
                                            <input type="number" class="form-control" name="price" id="price" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Hình ảnh</label>
                                            <div class="form-control images">
                                                @if(isset($product) && $product->getProductImage)
                                                    @foreach($product->getProductImage as $item)
                                                        <div class="image">
                                                            <img src="{{ $item['image_url'] }}">
                                                            <span class="remove-image" data-id="{{ $item['id'] }}">X</span>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>

                                            Thêm ảnh : <input type="file" class="btn btn-light add-image" name="images[]" multiple accept="image/*">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Biến thể</label>
                                            <select class="form-control" name="variants" id="variants">
                                                @foreach($variants as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Danh sách biến thể</label>
                                            <div class="form-control">
                                                <table class="table variants-container">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Tên</th>
                                                        <th scope="col">Số lượng sản phẩm</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="variant-list">
                                                    @if(isset($product))
                                                        @foreach($product_variant as $item)
                                                            <tr>
                                                                <td><input type="text" name="product_variant[name][]" value="{{ $item['name'] }}"></td>
                                                                <td><input type="number" name="product_variant[quantity][]" value="{{ $item['quantity'] }}"></td>
                                                                <td><span class="remove-variant-item">Xóa</span></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    {{--<tr>--}}
                                                    {{--<td><input type="text" name="product_variant[]" value="Trắng"></td>--}}
                                                    {{--<td><input type="number" name="product_variant_quantity[]" value="15"></td>--}}
                                                    {{--</tr>--}}
                                                    </tbody>
                                                </table>
                                                <div style="text-align: right">
                                                    <button type="button" class="btn btn-primary add-variant">Thêm</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
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
    <script src="{{ asset('dist/js/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });

        $('.add-variant').on('click', function () {
            $('.variant-list').append('<tr>\n' +
                '                                                                    <td><input type="text" name="product_variant[name][]" value=""></td>\n' +
                '                                                                    <td><input type="number" name="product_variant[quantity][]" value=""></td>\n' +
                '                                                    <td><span class="remove-variant-item">Xóa</span></td>\n' +
                '                                                                </tr>');
        });
        $('body').on('click', '.remove-variant-item', function () {
            $(this).parents('tr').remove();
        });
        @if(isset($product))
        $('.add-image').on('change', function () {
            var files = $(this)[0].files;
            var formData = new FormData();
            // Thêm từng file vào FormData
            for (var i = 0; i < files.length; i++) {
                formData.append('images[]', files[i]);
            }
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('product_id', $('input[name="product_id"]').val());
            $.ajax({
                url: '{{ route("admin.product.update.image") }}', // Đường dẫn đến route xử lý upload
                method: 'POST',
                data: formData,
                contentType: false, // Không thiết lập contentType vì chúng ta đang sử dụng FormData
                processData: false, // Không xử lý dữ liệu vì chúng ta đang gửi FormData
                success: function(response) {
                    // Xử lý khi upload thành công
                    console.log('Upload thành công');
                    for(let item of response.images) {
                        $('.images').append('<div class="image">\n' +
                            '                                                            <img src="'+ item.url +'">\n' +
                            '                                                            <span class="remove-image" data-id="'+ item.id +'">X</span>\n' +
                            '                                                        </div>');
                    }
                },
                error: function(response) {
                    // Xử lý khi có lỗi
                    console.log('Có lỗi xảy ra');
                }
            });
        });
        $('body').on('click', '.remove-image', function () {
            let product_image_id = $(this).attr('data-id');
            let remove_image = $(this);
            $.ajax({
                url: '{{ route("admin.product.delete.image") }}', // Đường dẫn đến route xử lý upload
                method: 'POST',
                data: {
                    product_image_id : product_image_id,
                    _token : '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Xử lý khi upload thành công
                    if(response.status == 1) {
                        remove_image.parent().remove();
                    }
                },
                error: function(response) {
                    // Xử lý khi có lỗi
                    console.log('Có lỗi xảy ra');
                }
            });
        });
        @endif
    </script>
@endsection