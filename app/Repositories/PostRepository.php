<?php

namespace App\Repositories;

use App\Contracts\IPostRepository;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostRepository implements IPostRepository
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get all blog posts.
     * @return mixed
     */
    public function all()
    {
        return DB::table('posts')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Get all recent blog posts.
     * Default limit amount is 10.
     * @param $limit - Default is 10, or specified limit
     * @return mixed
     */
    public function allRecent($limit)
    {
        if($limit == null) {
            $limit = 10;
        }
        return DB::table('posts')
            ->take($limit)
            ->get();
    }

    /**
     * Get a single post.
     *
     * @param $id
     * @return mixed
     */
    public function single($id)
    {
        return DB::table('posts')
            ->where('id', $id)
            ->first();
    }

    /**
     * Create a new post.
     *
     * @param $post
     * @return mixed
     */
    public function create($post)
    {
        DB::table('posts')->insert([
            'title' => $post->title,
            'description' => $post->description,
            'image_name' => $post->image_name
        ]);
    }

    /**
     * Update an existing post. Only
     * its content can be changed,
     * not created/updated dates.
     *
     * @param $post
     * @return mixed
     */
    public function update($post)
    {
        return DB::table('posts')
            ->where('id', $post->id)
            ->update([
            'title' => $post->title,
            'description' => $post->description,
            'image_name' => $post->image_name
        ]);
    }

    /**
     * Remove a post from the database.
     *
     * @param $post
     * @return mixed
     */
    public function delete($post)
    {
        return DB::table('posts')
            ->where('id', $post->id)
            ->delete();
    }
}