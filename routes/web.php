<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', function () {
    $posts = Post::with('comment')->get();
    return view('posts', ['posts' => $posts]);
});

Route::get('/post/{id}', function ($id) {
    $post = Post::where('id', $id)->first();

    $name = isset($_GET['n']) ? ($_GET['n'] !== null ? $_GET['n'] : "") : "";
    $email = isset($_GET['e']) ? ($_GET['e'] !== null ? urldecode($_GET['e']) : "") : "";
    $body = isset($_GET['b']) ? ($_GET['b'] !== null ? urldecode($_GET['b']) : "") : "";

    $query = Comment::query();
    $query->where('post_id', $id);

    if($name !== '') {
        $query->where('name', 'like', '%'.$name.'%');
    }
    if($email !== '') {
        $query->where('email', $email);
    }
    if($body !== '') {
        $query->where('body', 'like', '%'.$body.'%');
    }

    $comments = $query->get();

    return view('post', ['post' => $post, 'comments' => $comments, 'name' => $name, 'email' => $email, 'body' => $body]);
});
