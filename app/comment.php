<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

 class Comment extends Model
 {
     
    protected $fillable = [
        'comment_id', 'comment',
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
 
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
 }