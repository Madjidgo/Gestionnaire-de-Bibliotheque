<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['name','number'];


      public function biblis() 

    {

        return $this->hasMany('App\Biblis');

    }
}
