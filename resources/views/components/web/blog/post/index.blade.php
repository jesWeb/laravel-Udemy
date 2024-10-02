<div>
    {{$slot}}

    <!-- When there is no desire, all things are at peace. - Laozi -->
    {{-- <h1>H ola soy un componente anonimo </h1> --}}
    <h1>Listado de Posts </h1>
    @foreach ($posts as $p)
        <div class="mt-2 mb-2 caret-red-300">
            <h3>{{ $p->title }}</h3>
            <a href="{{ route('web.blog.show', $p) }}">Ver</a>
            <p>{{ $p->description }}</p>
        </div>
        {{ $posts->links() }}
    @endforeach


</div>
