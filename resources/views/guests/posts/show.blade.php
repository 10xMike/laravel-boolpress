@extends('layouts.app')

@section('content')
<h1>Show Page</h1>
<div class="col-md-8 col-sm-8">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    {{-- <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> --}}
    <img src="{{ $post->image }}" alt="">
</div>
@endsection