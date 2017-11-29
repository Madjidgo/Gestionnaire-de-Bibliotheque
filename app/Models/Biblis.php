<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biblis extends Model
{
    protected $fillable = ['title','author','resume','category', 'borrow','date'];
}

// *
//  * Get the route key for the model.
//  *
//  * @return string
 
// public function getRouteKeyName()
// {
//     return 'slug';
// }
