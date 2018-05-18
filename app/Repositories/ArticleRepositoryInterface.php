<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ArticleRepositoryInterface 
{
    /**
     * get all articles
     * 
     * @return mixed
     */
    public function all();

    /**
     * get an article by id
     * 
     * @param int
     */
    public function get($id);

    /**
     * save an article by id
     * 
     * @param int
     */
    public function save(Request $request);

    /**
     * delete an article
     * 
     * @param int
     */
    public function delete($id);

    /** 
     * update an article
     * 
     * @param int
     * @param array
     */
    public function update($id, $data);

    /**
     * get latest article by type
     * 
     * @param string
     * 
     */
     public function latest($type);
}