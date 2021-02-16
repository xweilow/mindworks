<?php
namespace App\GraphQL\Types;

use GraphQL;
use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Posts',
        'description' => 'Details about a post',
        'model' => Post::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a post'
            ],
            'user_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The user that posted a post'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the post',
            ],
            'body' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Body of the post',
            ],
            'comment_count' => [
                'type' => Type::int(),
                'description' => 'The number of comments on a post'
            ],
            'comment' => [
                'type' => Type::listOf(GraphQL::type('Comment')),
                'description' => 'The comments to a post'
            ],
      ];
    }

    protected function resolveCommentCountField($root, $args)
    {
        return $root->comment->count();
    }
}
