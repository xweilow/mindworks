<?php
namespace App\GraphQL\Queries;

use App\Models\Comment;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

class CommentsQuery extends Query
{
    protected $attributes = [
        'name' => 'comments',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Comment'));
    }

    public function args():array
    {
        return [
            'search' => [
                'name' => 'search',
                'type' => Type::string()
            ],
            'page' => [
                'name' => 'page',
                'type' => Type::int()
            ],
            'is_sort' => [
                'name' => 'is_sort',
                'type' => Type::boolean(),
                'rules' => 'required'
            ],
            'order_by' => [
                'name' => 'order_by',
                'type' => Type::string()
            ],
            'column_name' => [
                'name' => 'column_name',
                'type' => Type::string()
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $comments = Comment::query();

        if(isset($args['search'])) {
            $comments->where('id', $args['search'])
                ->orWhere('post_id', $args['search'])
                ->orWhere('name', 'like', '%'.$args['search'].'%')
                ->orWhere('email', 'like', '%'.$args['search'].'%')
                ->orWhere('body', 'like', '%'.$args['search'].'%');
        }

        if ($args['is_sort'] === true) {
            if (isset($args['order_by']) && isset($args['column_name'])) {
                $isOrderByValid = false;
                $isColumnNameValid = false;

                if ($args['order_by'] === 'asc' || $args['order_by'] === 'desc') {
                    $isOrderByValid = true;
                }

                if ($args['column_name'] === 'id' || $args['column_name'] === 'post_id' || $args['column_name'] === 'name' || $args['column_name'] === 'email' || $args['column_name'] === 'body') {
                    $isColumnNameValid = true;
                }

                if ($isOrderByValid == true && $isColumnNameValid == true) {
                    $comments->orderBy($args['column_name'], $args['order_by']);
                }
            }
        }

        if (isset($args['page'])) {
            return $comments->paginate(10, ['*'], 'page', $args['page']);
        } else {
            return $comments->get();
        }
    }
}
