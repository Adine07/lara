<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'status'
    ];

    public function articles()
    {
        return $this->hasMany('App\Model\Article');
    }
}
