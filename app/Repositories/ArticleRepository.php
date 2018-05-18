<?php

namespace App\Repositories;
use App\Article;

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

    public function delete($id)
    {
        Article::delete($id);
    }

    public function update($id, $data)
    {
        Article::find($id)->update($data);
    }

    public function latest()
    {
        return Article::orderBy("created_at")->limit(1)->get();
    }
}