@extends('admin.layouts.master')

@section('content')
    <h2 class="text-center my-3">Cập nhật bài viết </h2>

    <div class="container">
        <form class="forms-sample" method="POST" action="{{ route('articles.update', $article) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Tiêu Đề -->
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
            </div>

            <!-- Danh mục -->
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option value="{{$article->category_id}}" selected hidden>{{ $article->category->name }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tóm tắt -->
            <div class="form-group">
                <label for="summary">Tóm tắt</label>
                <input type="text" class="form-control" id="summary" name="summary" value="{{ $article->summary }}">
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" name="content" id="content" rows="5">{{ $article->content }}</textarea>
            </div>

            <!-- Trạng Thái -->
            <div class="form-group">
                <label for="status">Trạng Thái</label>
                <select class="form-select" id="status" name="status">
                    <option value="{{ $article->status }}" selected hidden>{{ $article->status }}</option>
                    <option value="archived">archived</option>
                    <option value="draft">draft</option>
                    <option value="published">published</option>
                </select>
            </div>

            <!-- Ảnh bài viết -->
            <div class="form-group">
                <label for="image">Ảnh bài viết: </label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ Storage::url($article->image) }}" width="100px" alt="">

            </div>

            <!-- Tác giả -->
            <div class="form-group">
                <label for="user_id">Tác giả</label>
                <select class="form-select" id="user_id" name="user_id">
                    <option value="{{$article->user_id}}" selected hidden>{{$article->user->name}}</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Ngày xuất bản -->
            <div class="form-group">
                <label for="published_at">Ngày xuất bản: </label>
                <input type="datetime" name="published_at" id="published_at" class="form-control"
                    value="{{ $article->published_at }}">
            </div>

            <!-- Các nút hành động -->
            <div class="justify-content-center d-flex align-center">
                <div class="mr-3">
                    <a class="btn btn-secondary" href="{{ route('articles.index') }}" role="button">Quay lại trang danh
                        sách</a>
                </div>
                <div class="mr-3">
                    <button class="btn btn-light">Hủy bỏ</button>
                </div>
                <div class="mr-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Cập nhật</button>
                </div>
            </div>

        </form>
    </div>
@endsection
