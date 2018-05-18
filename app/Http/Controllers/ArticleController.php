<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ArticleRepositoryInterface;

class ArticleController extends Controller
{
    protected $post;

    public function __construct(ArticleRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function index() {
        $post = $this->post->latest();

        return view('blog', compact('post'));
    }

    public function blog() {
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
