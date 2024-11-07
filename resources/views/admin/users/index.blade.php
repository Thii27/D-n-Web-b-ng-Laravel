@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title my-3">Danh sách người dùng</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Avatar</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <img src="{{ $user->avartar }}" alt="">
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary me-3 mb-3" href="{{ route('users.show', $user) }}"
                                        role="button">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning  mb-3" href="{{ route('users.edit', $user) }}" role="button">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    @if ($user->role != 'admin')
                                        <form action="{{ route('users.destroy', $user) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('co chac chan muon xoa')"
                                                class="btn btn-danger mb-3">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    @endif


                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
