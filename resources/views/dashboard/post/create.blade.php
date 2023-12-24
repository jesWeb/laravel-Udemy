@extends('dashboard.layout')

@section('content')
<h1>Crear Post</h1>

{{-- alerta de errores --}}
@include('dashboard.fragment.errors-form')

<form action="{{route('post.store')}}" method="POST">
    @csrf

    {{--  --}}
    <label for="title">Titulo</label>
    <input type="text" name="title" id="">
    {{--  --}}
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="">
    {{--  --}}
    <label for="">Categoria</label>
    <select name="categories_id" id="">
        <option value=""></option>
        {{-- peticion de categorias  --}}
        @foreach ($categories as $title => $id)
        <option value="{{$id}}">{{ $title }}</option>
        @endforeach
    </select>
    {{--  --}}
    <label for="">Posteado</label>
    <select name="posted" id="">
        <option value="yes">si</option>
        <option value="not">no</option>
    </select>
    {{--  --}}
    <label for="">Descripcion</label>
    <textarea name="description" id=""></textarea>
    {{--  --}}
    <label for="">Contenido</label>
    <textarea name="content" id=""></textarea>

    <button type="submit">enviar</button>

</form>
@endsection
