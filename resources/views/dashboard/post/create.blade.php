@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    {{-- forma uno de agregar los erroes --}}

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{ $e }}
            </div>
        @endforeach
    @endif --}}


    {{-- alerta de errores forma dos --}}
    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.store') }}" method="POST">
        

        @include('dashboard.post._form')


    </form>
@endsection
