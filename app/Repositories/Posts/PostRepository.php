<?php

namespace App\Repositories\Posts;

use Shamaseen\Repository\Utility\AbstractRepository as AbstractRepository;
use App\Models\Posts\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostRepository.
 *
 * @property Post $model
 */
class PostRepository extends AbstractRepository
{
    public array $with = ['comments'];

    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return Post::class;
    }

    /**
     * Override create to attach auth user
     */
    public function create(array $data = []): Model
    {
        // Attach authenticated user ID
        $data['user_id'] = Auth::id();

        return $this->model->create($data);
    }
}
