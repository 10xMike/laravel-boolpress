@extends('layouts.admin')
@section('content')
    <h2>All posts</h2>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td> <img src="{{ $post->image }}" alt="#" width="100"></td>
                    <td> {{ $post->title }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}">
                            <i class="fas fa-eye fa-sm fa-fw"></i> View |
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i> Edit |
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i
                                        class="fas fa-trash fa-xs fa-fw"></i></button>
                            </form>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
