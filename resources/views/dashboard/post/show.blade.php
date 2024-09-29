@extends('dashboard.layout')

@section('content')
    <h1>{{ $post->title }}</h1>

    <span>{{ $post->posted }}</span>
    <br>
    <span>{{ $post->categories_id }}</span>

    <div class="">
        {{ $post->description }}
    </div>

    <div class="">
        {{ $post->content }}
    </div>


        <img src="/uploads/posts/{{ $post->image }}" style="width: 250px" alt="{{ $post->title }}">


@endsection
