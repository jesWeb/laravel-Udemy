{{-- este es un toquen crea una proteccion en el formulario csrf tipo segridad --}}
@csrf
<label for="title">Titulo</label>
<input type="text" class="block rounded-sm shadow-sm bg-blue-500 w-full" name="title" id=""
    value="{{ old('title', $post ->title) }}">
{{--  --}}
<label for="slug">Slug</label>
<input type="text" class="block rounded-sm shadow-sm bg-blue-500 w-full" name="slug" id=""
    value="{{ old('slug', $post ->slug) }}">
{{--  --}}
<label for="">Categoria</label>
<select name="categories_id" class="block rounded-sm shadow-sm bg-blue-200 w-full">
    <option value=""></option>
    {{-- peticion de categorias tipo clave valor  --}}
    @foreach ($categories as $title => $id)
    <option {{ old($post->categories_id) == $id ? 'selected' : '' }} value="{{ $id }}">
        {{ $title }}</option>
    @endforeach
</select>
{{--  --}}
<label for="">Posteado</label>
<select name="posted" class="block rounded-sm shadow-sm bg-blue-500 w-full">
    <option {{ old($post->posted) == 'yes' ? 'selected' : '' }} value="yes">si</option>
    <option {{ old($post->posted) == 'not' ? 'selected' : '' }} value="not">no</option>
</select>
{{--  --}}
<label for="">Descripcion</label>
<textarea class="block rounded-sm shadow-sm bg-blue-500 w-full" name="description"
    id="">{{ old('description', $post->description) }}</textarea>
{{--  --}}
<label for="">Contenido</label>
<textarea class="block rounded-sm shadow-sm bg-blue-500 w-full" name="content"
    id="">{{ old('content', $post->content) }}</textarea>

{{-- validacion de imagen donde los parametrso estan en  la vista inical  --}}
@if ( isset($task) && $task == 'edit')
<label for="">Image</label>
<input type="file" name="image" id="">
@endif

<button class="bg-green-400  mt-3" type="submit">Registrar</button>
