@extends('dashboard.layout')

@section('content')
    <a href="{{ route('post.create') }}" target="blank">Crear nuevo</a>

    <table>
        <thead>

            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th>Acciones</th>

        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->posted }}</td>
                    <td>{{ $p->categories_id }}</td>
                    {{-- acciones --}}
                    <td>
                        <a href="{{ ' dashboard.post.edit', $p->id }}">Editar</a>
                        <a href="{{ ' dashboard.post.show', $p->id }}">Ver</a>
                        <a href="{{ ' post . destroy', $p->id }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- aqui esta la paginacion de laravel --}}
    {{ $posts->links() }}
@endsection
