@extends('layouts.app')


@section('content')


<div class="container">
  <img src="{{$post->image}}" alt="">

<h1>

  {{$post->title}}
</h1>

</div>

@endsection