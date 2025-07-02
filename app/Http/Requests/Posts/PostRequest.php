<?php

namespace App\Http\Requests\Posts;

use Shamaseen\Repository\Utility\Request as Request;

/**
 * Class PostRequest.
 */
class PostRequest extends Request
{
    /**
     * Define all the global rules for this request here.
     *
     * @var array
     */
    protected array $rules = [

    ];

    // Write your methods using {Controller Method Name}Rules, or {HTTP Method}MethodRules syntax.
    // For example, when index method in the controller is called a method called indexRules will be triggered here if it is exists.

    public function storeRules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description'  => 'required|string',
        ];
    }
}
