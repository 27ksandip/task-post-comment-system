<?php
namespace App\Repositories\Comments;

use Shamaseen\Repository\Utility\AbstractRepository as AbstractRepository;
use App\Models\Comments\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class CommentRepository.
 *
 * @property Comment $model
 */
class CommentRepository extends AbstractRepository
{
    public array $with = [];

    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return Comment::class;

        // this is test line 
        // this is test line 
        // this is test line 
        // this is test line 
    }

    public function create(array $data = []): Model
    {
        $data['user_id'] = Auth::id();
        return $this->model->create($data);
    }
}
