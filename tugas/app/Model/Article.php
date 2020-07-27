<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id', 'title', 'author', 'content', 'tags', 'image'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
