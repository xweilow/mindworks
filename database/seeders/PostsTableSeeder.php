<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPostsJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        $allPosts = json_decode($allPostsJson, true);

        foreach($allPosts as $post) {
            Post::create([
                'id' => $post['id'],
                'user_id' => $post['userId'],
                'title' => $post['title'],
                'body' => $post['body'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
