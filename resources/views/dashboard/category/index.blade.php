@extends('dashboard.layout')

@section('content')
    <a href="{{ route('category.create') }}" target="blank">Crear nuevo</a>

    <table>
        <thead>

            <th>id</th>
            <th>Titulo</th>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->categories_id }}</td>
                    {{-- acciones --}}
                    <td>
                        <a href="{{ route('category.edit', $c->id) }}">Editar</a>
                         <a href="{{ route('category.show', $c->id) }}">Ver</a>
                        {{--  btn de eliminar --}}
                        <form action="{{route('category.destroy',$c)}}" method="post">
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
    {{ $categories->links() }}
@endsection
