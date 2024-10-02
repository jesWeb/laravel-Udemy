<x-alert class="mb-4" type='Error' :message="$post->title" />

<h1>
    {{ $post->title }}
</h1>
<p>{{ $post->created_at }}</p>
<p>{{ $post->content }}</p>
