@extends('admin.layouts.master')

@section('content')
    <h2 class="text-center my-3">Thêm mới bài viết </h2>

    <div class="container">
        <form class="forms-sample" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Tên Danh Mục</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('title') }}">
            </div>

            <!-- Các nút hành động -->
            <div class="justify-content-center d-flex align-center">
                <div class="mr-3">
                    <a class="btn btn-secondary" href="{{ route('categories.index') }}" role="button">Quay lại trang danh sách</a>
                </div>
                <div class="mr-3">
                    <button class="btn btn-light">Hủy bỏ</button>
                </div>
                <div class="mr-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Thêm mới</button>
                </div>
            </div>

        </form>
    </div>
@endsection
