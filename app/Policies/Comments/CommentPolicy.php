<?php

namespace App\Policies\Comments;

use App\Models\Comments\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    // Any method here that match the controller method name will be automatically called.

    public function destroy() {
        $commentId = request()->route('comment');
        $commentUserId = Comment::where('id',$commentId)->pluck('user_id')->first();
        
        return auth()->id() == $commentUserId;
    }
}
