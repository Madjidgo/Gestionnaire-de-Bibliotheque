<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\hasMany;
use Illuminate\Database\Eloquent\Model;

class Biblis extends Model
{
    protected $fillable = ['title','author','resume','category', 'date'];
}

// *
//  * Get the route key for the model.
//  *
//  * @return string
 
// public function getRouteKeyName()
// {
//     return 'slug';
// }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}