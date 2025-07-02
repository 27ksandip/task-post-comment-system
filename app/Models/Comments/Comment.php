<?php

namespace App\Models\Comments;

use App\Models\BaseModel;
use Shamaseen\Repository\Utility\Model as Model;

/**
 * Class Comment.
 */
class Comment extends BaseModel
{
    /*
    * Fill in your fillables here
    */
    protected $fillable = ['post_id','user_id','comment'];
}
