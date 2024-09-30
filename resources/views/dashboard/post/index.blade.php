@extends('dashboard.layout')

@section('content')
    <a class= "my-3 btn" href="{{ route('post.create') }}" target="blank">Crear nuevo</a>

    <div class="mb-5">
        <div class="">
            <table class=" table ">
                <thead >

                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Posted</th>
                    <th>Acciones</th>

                </thead>
                <tbody>
                    @foreach ($posts as $p)
                        <tr >
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->posted }}</td>
                            <td>{{ $p->categories_id }}</td>
                            {{-- acciones --}}
                            <td class="">


                                <a class="my-3 py-2.5 px-6 rounded-lg text-sm font-medium bg-blue-500 "
                                    href=" {{ route('post.edit', $p) }}">
                                    Editar
                                </a>

                                <a class="my-3 py-2.5 px-6 rounded-lg text-sm font-medium bg-green-400"
                                    href=" {{ route('post.show', $p) }}">
                                    Ver
                                </a>


                                {{--  btn de eliminar --}}
                                <form action="{{ route('post.destroy', $p) }}" method="post">
                                    {{-- elimina token  --}}
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class=" bg-red-400 border rounded px-3 py-2 text-dark font-bold  hover:bg-red-700 border-red-500"
                                        type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- aqui esta la paginacion de laravel --}}
   <div class="mt-3">
    {{ $posts->links() }}
   </div>
@endsection
