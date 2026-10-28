<x-header />

<h1>Главная страница</h1>

@foreach($articles as $article)
    <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
        <h2>{{ $article->title }}</h2>
        <p><strong>Категория:</strong> {{ $article->category }}</p>
        <p><strong>Автор:</strong> {{ $article->author }}</p>
        <p>{{ $article->content }}</p>
    </div>
@endforeach

<x-footer />