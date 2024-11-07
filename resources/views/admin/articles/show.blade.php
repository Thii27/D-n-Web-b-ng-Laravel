@extends('admin.layouts.master')

@section('content')
    <h2 class="text-center my-3">Chi tiết bài viết: {{ $article->title }}</h2>
    <div class="w-100">
        <div class="text-center fw-medium">
            <p class="fs-4">{{ $article->summary }}</p>
        </div>
        <div class="d-flex row">
            <div class="col-5">
                <img src="{{ Storage::url($article->image) }}" alt="" class="w-100">
            </div>
            <div class="col-7 ">
                <p>{{ $article->content }}</p>
            </div>
        </div>
        <div class="d-flex text-center justify-content-center align-center mt-5">
            <div class="mr-3 fs-5 fw-medium">
                <span>Tác giả: </span>
                {{ $article->user->name }}
            </div>
            <div class="mx-3 fs-5 fw-medium">
                <span>Trạng thái: </span>
                {{ $article->status }}
            </div>
            <div class="mr-3 fs-5 fw-medium">
                <span>Danh mục: </span>
                {{ $article->category->name }}
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-secondary  my-5 " href="{{route('articles.index')}}" role="button">Quay lại trang danh sách</a>
    </div>
@endsection
