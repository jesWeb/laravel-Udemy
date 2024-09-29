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
                        <a href="{{ route('post.edit', $p->id) }}">Editar</a>
                         <a href="{{ route('post.show', $p->id) }}">Ver</a>
                        {{--  btn de eliminar --}}
                        <form action="{{route('post.destroy',$p)}}" method="post">
                            {{-- elimina token  --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- aqui esta la paginacion de laravel --}}
    {{ $posts->links() }}
@endsection
