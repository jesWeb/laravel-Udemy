@extends('web.layout')

@section('content')

{{-- ejemplo de componente  --}}

<x-web.blog.post.index :posts="$posts"  >
    <h1>Listados principales de post</h1>
</x-web.blog.post.index>

@endsection
