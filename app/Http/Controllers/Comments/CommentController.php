<?php

namespace App\Http\Controllers\Comments;

use Shamaseen\Repository\Utility\Controller as Controller;
use App\Http\Requests\Comments\CommentRequest;
use App\Http\Resources\Comments\CommentCollection;
use App\Http\Resources\Comments\CommentResource;
use App\Policies\Comments\CommentPolicy;
use App\Repositories\Comments\CommentRepository;

/**
 * Class CommentController.
 *
 * @property CommentRepository $repository
 */
class CommentController extends Controller
{

    public string $routeIndex = 'posts.index';

    public string $pageTitle = 'Comment';
    public string $createRoute = 'comments.create';

    public string $viewIndex = 'comments.index';
    public string $viewCreate = 'comments.create';
    public string $viewEdit = 'comments.edit';
    public string $viewShow = 'comments.show';

    public ?string $resourceClass = CommentResource::class;
    public ?string $collectionClass = CommentCollection::class;
    public ?string $policyClass = CommentPolicy::class;
    public string $requestClass = CommentRequest::class;

    /**
     * CommentController constructor.
     *
     * @param CommentRepository $repository
     */
    public function __construct(CommentRepository $repository)
    {
        parent::__construct($repository);
    }
}
