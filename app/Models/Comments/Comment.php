<?php

namespace App\Models\Comments;

use Shamaseen\Repository\Utility\Model as Model;

/**
 * Class Comment.
 */
class Comment extends Model
{
    /*
    * Fill in your fillables here
    */
    protected $fillable = ['post_id','user_id','comment'];
}
