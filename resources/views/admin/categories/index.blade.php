@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title my-3">Danh sách danh mục</h1>

                <a class="btn btn-info my-3" href="{{ route('categories.create') }}" role="button">Thêm danh mục</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    {{-- <a class="btn btn-warning" href="{{ route('categories.edit', $category) }}"
                                        role="button" data-id="{{ $category->id }}">Sửa</a> --}}
                                    {{-- <a class="btn btn-warning  mb-3" href="{{ route('articles.edit', $article) }}"
                                        role="button">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a> --}}

                                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('co chac chan muon xoa')"
                                            class="btn btn-danger mb-3">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>

                                    <button class="btn btn-warning btn-edit" data-id="{{ $category->id }}">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </button>

                                </td>
                            </tr>
                            <!-- Form chỉnh sửa (ẩn ban đầu) -->
                            <tr id="edit-form-{{ $category->id }}" style="display:none;">
                                <td colspan="5">
                                    <form id="edit-category-form-{{ $category->id }}" class="form-inline" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" name="name" value="{{ $category->name }}"
                                            class="form-control mx-2">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <button type="button" class="btn btn-secondary btn-cancel"
                                            data-id="{{ $category->id }}">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/category.js') }}"></script>
@endsection
