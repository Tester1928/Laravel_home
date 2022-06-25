<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::find(1);
        dump($post->id);
        dump($post->title);
        dump($post->description);
        dump($post->image);
        dump($post->likes);
        dump($post->is_published);
    }
}
