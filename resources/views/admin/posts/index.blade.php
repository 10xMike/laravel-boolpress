@extends('layouts.admin')

@section('content')

    <h2>All posts</h2>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>image</th>
                <th>title</th>
                <th>actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td> <img src="{{ $post->image }}" alt="#" width="100"></td>
                    <td> {{ $post->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- delete form here? --}}

    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></button>
    </form>

    {{-- delete form here? --}}

    @endsection