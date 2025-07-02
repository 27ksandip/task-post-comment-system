<?php

namespace App\Models\Posts;

use App\Models\Comments\Comment;
use Shamaseen\Repository\Utility\Model as Model;

/**
 * Class Post.
 */
class Post extends Model
{
    /*
    * Fill in your fillables here
    */
    protected $fillable = ['user_id','title','description'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
