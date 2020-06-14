@include('layouts.header')

@include('article.upload')

<body class="p-3">
    <h1>投稿記事編集</h1>

    <form method="post" action="/edit">
      {{ csrf_field() }}
      <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
      </div>
      
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">送信</button>
    </form>
  </body>
</html>