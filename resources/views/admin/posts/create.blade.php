<h1>Cadastrar Post</h1>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
    <button type="submit">Enviar</button>
</form>