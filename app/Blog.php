<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['author_id', 'blog_title', 'blog_description', 'blog_image', 'publication_status'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
