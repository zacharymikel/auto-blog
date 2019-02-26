<?php

namespace App\Contracts;

interface IPostRepository
{
    /**
     * Get all blog posts.
     * @return mixed
     */
    public function all();

    /**
     * Get all recent blog posts.
     * Default limit amount is 10.
     * @param $limit - Default is 10, or specified limit
     * @return mixed
     */
    public function allRecent($limit);

    /**
     * Get a single post.
     *
     * @param $id
     * @return mixed
     */
    public function single($id);

    /**
     * Create a new post.
     *
     * @param $post
     * @return mixed
     */
    public function create($post);

    /**
     * Update an existing post. Only
     * its content can be changed,
     * not created/updated dates.
     *
     * @param $post
     * @return mixed
     */
    public function update($post);

    /**
     * Remove a post from the database.
     *
     * @param $post
     * @return mixed
     */
    public function delete($post);
}