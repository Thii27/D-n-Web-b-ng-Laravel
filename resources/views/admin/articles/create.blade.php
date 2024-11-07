@extends('admin.layouts.master')

@section('content')
    <h2 class="text-center my-3">Thêm mới bài viết </h2>

    <div class="container">
        <form class="forms-sample" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Tiêu Đề -->
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <!-- Danh mục -->
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option value="0" hidden>--Chọn danh mục--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tóm tắt -->
            <div class="form-group">
                <label for="summary">Tóm tắt</label>
                <input type="text" class="form-control" id="summary" name="summary" value="{{ old('summary') }}">
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" name="content" id="content" rows="5">{{ old('content') }}</textarea>
            </div>

            <!-- Trạng Thái -->
            <div class="form-group">
                <label for="status">Trạng Thái</label>
                <select class="form-select" id="status" name="status">
                        <option value="" hidden>--Chọn trạng thái--</option>
                        <option value="archived">archived</option>
                        <option value="draft">draft</option>
                        <option value="published">published</option>
                </select>
            </div>

            <!-- Ảnh bài viết -->
            <div class="form-group">
                <label for="image">Ảnh bài viết: </label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <!-- Tác giả -->
            <div class="form-group">
                <label for="user_id">Tác giả</label>
                <select class="form-select" id="user_id" name="user_id">
                    <option value="0" hidden>--Chọn tác giả--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Ngày xuất bản -->
            <div class="form-group">
                <label for="published_at">Ngày xuất bản: </label>
                <input type="datetime" name="published_at" id="published_at" class="form-control" value="{{ old('published_at') }}">
            </div>

            <!-- Các nút hành động -->
            <div class="justify-content-center d-flex align-center">
                <div class="mr-3">
                    <a class="btn btn-secondary" href="{{ route('articles.index') }}" role="button">Quay lại trang danh sách</a>
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
