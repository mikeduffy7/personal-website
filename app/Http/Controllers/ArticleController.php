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
        $post = $this->post->latestBlog();

        return view('blog', compact('post'));
    }

    public function blog() {
        $post = $this->post->latest('blog');

        return view('blog', compact('post'));
    }

    public function post(Request $request) {
        
        $post = $this->post->save($request);

        return view('home');
    }   
}
