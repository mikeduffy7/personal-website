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
     * Update an article
     * 
     * @param int
     * @param array
     */
    public function update($id, $data);
    /**
     * Get latest article
     * 
     * @param string
     * 
     */

     public function latest($type);
}