<?php

namespace App\Repositories;
use App\Blog;

class BlogRepository implements BlogRepositoryInterface 
{
    public function get($id)
    {
        return Blog::where('id', $id)->get();
    }

    public function all()
    {
        return Blog::all();
    }

    public function delete($id)
    {
        Blog::delete($id);
    }

    public function update($id, $data)
    {
        Blog::find($id)->update($data);
    }

    public function latest()
    {
        return Blog::orderBy("created_at")->limit(1)->get();
    }
}