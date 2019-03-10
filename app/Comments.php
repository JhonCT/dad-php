<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';    

    public $fillable = [
        'id', 'postId', 'name', 'email', 'body'
    ];
}
