<h1>Detalhes do Post {{ $post->title }}</h1>
<ul>
    <li>{{ $post->title }}</li>
    <li>{{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o Post: {{ $post->title }}</button>
</form>
