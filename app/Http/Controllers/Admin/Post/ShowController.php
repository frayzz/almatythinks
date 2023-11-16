<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Post $category)
    {
        return view('admin.post.show', compact('post'));
    }
}
