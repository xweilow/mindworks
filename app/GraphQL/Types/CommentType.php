<?php
namespace App\GraphQL\Types;

use App\Models\Comment;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CommentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Comment',
        'description' => 'Comments for a particular post',
        'model' => Comment::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the comment',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => "The user's name of the comment",
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => "The user's email of the comment",
            ],
            'body' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Body of the comment',
            ],
        ];
    }
}
