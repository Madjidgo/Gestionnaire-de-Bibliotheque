<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','number'];


      public function book() 

    {

        return $this->hasMany('App\Models\Book');

    }
}
