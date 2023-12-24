@extends('dashboard.layout')

@section('content')

<table>
    <thead>
        <tr>
            <td>Titulo</td>
            <td>Categoria</td>
            <td>Posted</td>
            {{-- acciones --}}
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ( $posts as $p)
            <th>{{$p->title}}</th>
            <th>{{$p->categoria}}</th>
            <th>{{$p->posted}}</th>
            {{-- acciones --}}
            <th>Acciones</th>

            @endforeach

        </tr>
    </tbody>
</table>

@endsection
