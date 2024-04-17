<?php

namespace App\Models;

class BlogPost extends BaseActiveRecord
{
    protected $table = 'blog_posts';
    protected $fillable = ['post_id', 'created_at', 'title', 'image', 'content'];
}
