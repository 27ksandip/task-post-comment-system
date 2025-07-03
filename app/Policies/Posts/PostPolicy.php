<?php

namespace App\Policies\Posts;

use App\Models\Posts\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // Any method here that match the controller method name will be automatically called.

    public function store(User $user)
    {
        return $user->id;
    }

    public function show()
    {
        $getPostId = request()->route('post');
        $postUserId = Post::where('id', $getPostId)->pluck('user_id')->first();

        return auth()->id() == $postUserId;
    }

    public function destroy()
    {
        $getPostId = request()->route('post');
        $postUserId = Post::where('id', $getPostId)->pluck('user_id')->first();

        return auth()->id() == $postUserId;
    }
}
