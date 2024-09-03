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
                                        <h1>Sửa danh mục con</h1>
                                    </div>
                                    <div class="content">
                                        <form action="{{ route('admin.category-sub.update', ['id' => $category_sub->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Tên danh mục</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{ $category_sub->name }}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="slug" class="form-label">Đường dẫn</label>
                                                <input type="text" class="form-control" name="slug" id="slug" value="{{ $category_sub->slug }}" required>
                                            </div>
                                            {{--<img src="{{ $category_sub->image }}" style="width: 200px">--}}
                                            <div class="col-md-12">
                                                <label for="image" class="form-label">Hình ảnh</label>
                                                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="category" class="form-label">Danh mục cha</label>
                                                <select class="form-control" name="category" id="category">
                                                    @foreach($category as $item)
                                                        <option value="{{ $item['id'] }}" @if($item['id'] == $category_sub->category_id)selected @endif>{{ $item['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button class="btn btn-primary mt-3">Cập nhật</button>
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

    </script>
@endsection