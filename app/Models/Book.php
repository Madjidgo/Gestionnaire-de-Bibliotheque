<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * fillable
 */
class Book extends Model
{
   protected $fillable = ['title','author','resume','category', 'borrow','date','user_id'];

    // joins
	public function user()

	{

	    return $this->belongsTo('App\Models\User');

	}

}
