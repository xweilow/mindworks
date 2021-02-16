<?php

namespace App\GraphQL\Queries;

use App\Models\Post;
use App\Models\Comment;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PostQuery extends Query
{
    protected $attributes = [
        'name' => 'post',
    ];

    public function type(): Type
    {
        return GraphQL::type('Post');
    }

    public function args():array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Post::find($args['id']);
    }
}
