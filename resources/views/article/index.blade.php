@include('layouts.header')

    <body class="p-3">
    <h1>投稿一覧</h1>
    <p><a href="/create" class="btn btn-primary">新規追加</a></p>
    
    @foreach ($articles as $article)
    <div class="card mb-2">
      <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
        <a href="/edit/{{ $article->id }}" class="card-link">編集</a>
        <a href="/delete/{{ $article->id }}" class="card-link">詳細を表示</a> 
      </div>
    </div>
    @endforeach
  </body>
</html>