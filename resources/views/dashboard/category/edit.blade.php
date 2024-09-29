@extends('dashboard.layout')

@section('content')

{{-- nota el enctype='multipart/form-data' permite la craga de archivos  --}}

<form action="{{ route('category.update', $category->id) }}" method="post">
    @method('PATCH')
    {{-- le podemos pasar mas datos pero en este caso al elemerno hijo  --}}
   @include('dashboard.category._form',['task'=> 'edit'])

</form>
@endsection
