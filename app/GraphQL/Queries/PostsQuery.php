<?php
namespace App\GraphQL\Queries;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

class PostsQuery extends Query
{
    protected $attributes = [
        'name' => 'posts',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Post'));
    }

    public function args():array
    {
        return [
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
        $fields = $info->getFieldSelection();

        $posts = Post::query();

        foreach ($fields as $field => $keys) {
            if ($field === 'comment' || $field == 'comment_count') {
                $posts->with('comment');
            }
        }

        if ($args['is_sort'] === true) {
            if (isset($args['order_by']) && isset($args['column_name'])) {
                $isOrderByValid = false;
                $isColumnNameValid = false;

                if ($args['order_by'] === 'asc' || $args['order_by'] === 'desc') {
                    $isOrderByValid = true;
                }

                if ($args['column_name'] === 'id' || $args['column_name'] === 'title' || $args['column_name'] === 'body') {
                    $isColumnNameValid = true;
                }

                if ($isOrderByValid == true && $isColumnNameValid == true) {
                    $posts->orderBy($args['column_name'], $args['order_by']);
                }
            }
        }

        if (isset($args['page'])) {
            return $posts->paginate(10, ['*'], 'page', $args['page']);
        } else {
            return $posts->get();
        }
      }
}
