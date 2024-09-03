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
                                        <h1>Thêm mới danh mục</h1>
                                    </div>
                                    <div class="content">
                                        <form action="{{ route('admin.category.store') }}" method="post">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="title" class="form-label">Tên danh mục</label>
                                                <input type="text" class="form-control" name="title" id="title" value="" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="slug" class="form-label">Đường dẫn</label>
                                                <input type="text" class="form-control" name="slug" id="slug" value="" required>
                                            </div>
                                            <button class="btn btn-primary mt-3">Thêm</button>
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