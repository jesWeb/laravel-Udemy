{{-- este es un toquen crea una proteccion en el formulario csrf tipo segridad --}}
@csrf
<label class="form-control" for="title">Titulo</label>
<input class="form-control" type="text" name="title" id="" value="{{ old('title', $category ->title) }}">
{{--  --}}
<label for="slug">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug', $category ->slug) }}">

<button class="btn btn-success mt-2" type="submit">enviar</button>
