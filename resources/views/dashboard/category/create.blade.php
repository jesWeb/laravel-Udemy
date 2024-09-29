@extends('dashboard.layout')

@section('content')
    <h1>Crear Categoria</h1>

    {{-- alerta de errores forma dos --}}
    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.store') }}" method="POST">


        @include('dashboard.category._form')


    </form>
@endsection
