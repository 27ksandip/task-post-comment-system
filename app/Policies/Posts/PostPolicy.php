<?php

namespace App\Policies\Posts;

use App\Models\Posts\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // Any method here that match the controller method name will be automatically called.

    public function store(User $user) {
        return $user->id;
    }

    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    public function view(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
