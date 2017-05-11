<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   
    //POST DATA in DATABASE
    protected $fillable = ['name', 'text', 'images'];
}
