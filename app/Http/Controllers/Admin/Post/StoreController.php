<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
