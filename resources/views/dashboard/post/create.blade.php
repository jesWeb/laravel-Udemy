<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>hola conexion </h1>

    <form action="{{route('post.store')}}" method="post">
        @csrf

        {{--  --}}
        <label for="title">Titulo</label>
        <input type="text" name="title" id="">
        {{--  --}}
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="">
        {{--  --}}
        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
            {{-- peticion de categorias  --}}
            @foreach ( $categories as $cate )
            <option value=" {{$cate->id}}">{{$cate->title}}</option>
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

</body>

</html>
