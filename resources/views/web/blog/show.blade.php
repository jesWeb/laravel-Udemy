@extends('web.layout')

@section('content')

{{-- ejemplo de componente con vista indicvidual   --}}

<x-web.blog.post.show :post="$post" />

@endsection
