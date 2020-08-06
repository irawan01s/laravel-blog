<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'status', 'author', 'thumbnail'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
