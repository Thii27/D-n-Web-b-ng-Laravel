@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-6 grid-margin stretch-card ">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title my-3">Danh sách bài viết</h1>
                <a class="btn btn-info my-3" href="{{ route('articles.create') }}" role="button">Thêm bài viết</a>

                <table class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Published at</th>
                            <th>Image</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->category->name }}</td>
                                <td>{{ $article->title }}</td>

                                <td>{{ $article->status }}</td>
                                <td>{{ $article->published_at }}</td>
                                <td>
                                    @if ($article->image)
                                        <img src="{{ Storage::url($article->image) }}" alt="" width="100px">
                                    @endif
                                </td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->updated_at }}</td>
                                <td >
                                    <a class="btn btn-primary me-3 mb-3" href="{{ route('articles.show', $article) }}"
                                        role="button"> 
                                        <i class="fa fa-eye"></i> 
                                    </a>
                                    <a class="btn btn-warning  mb-3" href="{{ route('articles.edit', $article) }}"
                                        role="button">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>

                                    <form action="{{ route('articles.destroy', $article) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('co chac chan muon xoa')"
                                            class="btn btn-danger mb-3">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-3">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
