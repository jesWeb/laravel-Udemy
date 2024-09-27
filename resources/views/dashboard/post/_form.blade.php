{{-- este es un toquen crea una proteccion en el formulario csrf tipo segridad --}}
@csrf
<label for="title">Titulo</label>
<input type="text" name="title" id="" value="{{ old('title',$post->title)  }}">
{{--  --}}
<label for="slug">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug',$post->title)}}">
{{--  --}}
<label for="">Categoria</label>
<select name="categories_id" id="">
    <option value=""></option>
    {{-- peticion de categorias tipo clave valor  --}}
    @foreach ($categories as $title => $id)
    <option {{old($post->categories_id)== $id ? 'selected' : '' }} value="{{ $id }}">
        {{ $title }}</option>
    @endforeach
</select>
{{--  --}}
<label for="">Posteado</label>
<select name="posted" id="">
    <option {{ old($post->posted) == 'yes' ? 'selected' : '' }} value="yes">si</option>
    <option {{ old($post->posted) == 'not' ? 'selected' : '' }} value="not">no</option>
</select>
{{--  --}}
<label for="">Descripcion</label>
<textarea name="description" id="" >{{old('description',$post->description)}}</textarea>
{{--  --}}
<label for="">Contenido</label>
<textarea name="content" id="">{{ old('content',$post->content) }}</textarea>

<button type="submit">enviar</button>
