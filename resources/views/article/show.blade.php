@include('layouts.header')

  <body class="p-3">
    <h1>投稿記事詳細</h1>

    <form method="post" action="/delete">
      {{ csrf_field() }}
      <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">記事の削除</button>
    </form>

    <form method="post" action="/delete">>
      {{ csrf_field() }}
      <div class="comment">
        <label for="commentInput">みんなのコメント</label>
        <input type="text" class="form-control" id="commentInput" name="comment">
      </div>
      <button type="submit" class="btn btn-primary">送信</button>
    </form>
    <textarea readonly class="form-control" id="commentInput" rows="3" name="comment">{{ $comment->comment }}</textarea>
  </body>
</html>