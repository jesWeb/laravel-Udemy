@extends('dashboard.layout')

@section('content')

{{-- nota el enctype='multipart/form-data' permite la craga de archivos  --}}

<form action="{{ route('post.update', $post->id) }}" method="post" enctype='multipart/form-data'>
    @method('PATCH')
    {{-- le podemos pasar mas datos pero en este caso al elemerno hijo  --}}
   @include('dashboard.post._form',['task'=> 'edit'])

</form>
@endsection
