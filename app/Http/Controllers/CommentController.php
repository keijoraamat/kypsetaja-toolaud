<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function addComment (Request $com){
        $comment = new Comment;
        $comment->name = $com->name;
        $comment->body = $com->comment;
        $comment->post_id = $com->posts_id;
        $comment->save();
  
        $post = Post::find($com->posts_id);
        $post->comments_id = $comment->id;
        $post->update();

        $posts = Post::all();
        $postWithComments = [];

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $newPost = $post;
                $newPost->comment = $post->comment;
                $postWithComments[] = $newPost;
            }
        }

        return redirect()->route('posts.show', $postWithComments);
    }

    public function destroyComment($id) {
        $this->middleware('auth');
        $comment = Comment::find($id);
        $comment->delete();
        Session::flash('success', 'Kommentaar kustutatud!');
        return redirect()->route('posts.index');
    }
}
