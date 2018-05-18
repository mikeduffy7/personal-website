<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepositoryInterface;

class BlogController extends Controller
{
    protected $post;

    public function __construct(BlogRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function index() {
        $post = $this->post->latest();

        return view('blog', compact('post'));
    }

    public function post(Request $request) {
        $blog = new Blog();
        
        $blog->title = $request->title;
        $blog->body = $request->body;

        $blog->save();

        return view('blog');
    }
}
