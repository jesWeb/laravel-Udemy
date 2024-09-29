{{-- este es un toquen crea una proteccion en el formulario csrf tipo segridad --}}
@csrf
<label for="title">Titulo</label>
<input type="text" name="title" id="" value="{{ old('title', $category ->title) }}">
{{--  --}}
<label for="slug">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug', $category ->slug) }}">

<button type="submit">enviar</button>
