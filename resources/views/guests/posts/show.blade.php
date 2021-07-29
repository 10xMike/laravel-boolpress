@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Show Posts</h1>

    <div class="posts">
        <img src="" alt="">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
</section>

@endsection