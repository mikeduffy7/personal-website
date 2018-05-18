<?php

namespace App\Repositories;
use App\Article;
use Illuminate\Http\Request;

class ArticleRepository implements ArticleRepositoryInterface 
{
    public function get($id)
    {
        return Article::where('id', $id)->get();
    }

    public function all()
    {
        return Article::all();
    }

    public function save(Request $request) 
    {
        $post = new Article();
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->type = $request->type;

        $post->save();
    }

    public function delete($id)
    {
        Article::delete($id);
    }

    public function update($id, $data)
    {
        Article::find($id)->update($data);
    }

    public function latest($type)
    {
        return Article::where('type', $type)->orderBy("created_at")->limit(1)->get();
    }
}