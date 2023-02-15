<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }
}
