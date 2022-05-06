<?php

namespace Blog;

class Author extends User
{
    protected $created_post;
    protected $posts = [];

    public function create_post(Post $post)
    {
        $this->posts[] = $post;
    }

    public function created_posts()
    {
        return count($this->posts);
    }

    public function get_posts() : array
    {
        return $this->posts;        
    }
}