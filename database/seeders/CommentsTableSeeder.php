<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allCommentsJson = file_get_contents('https://jsonplaceholder.typicode.com/comments');
        $allComments = json_decode($allCommentsJson, true);

        foreach($allComments as $comment) {
            Comment::create([
                'id' => $comment['id'],
                'post_id' => $comment['postId'],
                'name' => $comment['name'],
                'email' => $comment['email'],
                'body' => $comment['body'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
