<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all(); 
        return view('article.show', ['article' => $article, 'comments' => $comments]);  
    }
    
    public function create()
    {
        return view('article.show');
    }
    
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        
        $comment = new Comment("sqlite:comments.db");
        $comment->comment_id = $request->comment_id;
        $comment->comment = $request->comment;
        $comment-> save();
        
        return view('article.show');
    }
    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        $comment = Comment::find($id);
        return view('article.show', ['article' => $article, 'comment' => $comment]);
    }
    
    public function delete(Request $request)
    {
        Comment::destroy($request->id);
        return view('article.show');
    }
}