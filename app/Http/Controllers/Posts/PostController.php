<?php

namespace App\Http\Controllers\Posts;

use Shamaseen\Repository\Utility\Controller as Controller;
use App\Http\Requests\Posts\PostRequest;
use App\Http\Resources\Posts\PostCollection;
use App\Http\Resources\Posts\PostResource;
use App\Policies\Posts\PostPolicy;
use App\Repositories\Posts\PostRepository;

/**
 * Class PostController.
 *
 * @property PostRepository $repository
 */
class PostController extends Controller
{

    public string $routeIndex = 'posts.index';

    public string $pageTitle = 'Post';
    public string $createRoute = 'posts.create';

    public string $viewIndex = 'posts.index';
    public string $viewCreate = 'posts.create';
    public string $viewEdit = 'posts.edit';
    public string $viewShow = 'posts.show';

    public ?string $resourceClass = PostResource::class;
    public ?string $collectionClass = PostCollection::class;
    public ?string $policyClass = PostPolicy::class;
    public string $requestClass = PostRequest::class;

    /**
     * PostController constructor.
     *
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        parent::__construct($repository);
    }

    public function index(): mixed
    {
        // just for something else test related to git
        $posts = $this->repository->index();
        $posts = $this->repository->index();
        $posts = $this->repository->index();
        $posts = $this->repository->index();
        $posts = $this->repository->index();

        return view($this->viewIndex, compact('posts'));
    }
}
