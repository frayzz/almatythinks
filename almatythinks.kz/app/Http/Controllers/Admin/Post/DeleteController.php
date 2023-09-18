<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Post;

class DeleteController extends Controller
{
    public function __invoke(Post $category)
    {
        $category->delete();
        return redirect()->route('admin.post.index');
    }
}
