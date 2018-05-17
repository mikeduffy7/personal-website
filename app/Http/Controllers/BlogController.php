<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

    public function post(Request $request) {
        $blog = new Blog();
        
        $blog->title = $request->title;
        $blog->body = $request->body;

        $blog->save();

        return view('blog');
    }
}
