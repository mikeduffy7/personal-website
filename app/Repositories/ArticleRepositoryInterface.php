<?php

namespace App\Repositories;

interface ArticleRepositoryInterface 
{
    /**
     * Get all blog posts
     * 
     * @return mixed
     */
    public function all();

    /**
     * Get a blog post by id
     * 
     * @param int
     */
    
    public function get($id);
    /**
     * Delete a blog post
     * 
     * @param int
     */
    public function delete($id);
    /** 
     * Update blog post
     * 
     * @param int
     * @param array
     */
    public function update($id, $data);
    /**
     * Get latest blog post
     * 
     * @return mixed
     */

     public function latest();
}