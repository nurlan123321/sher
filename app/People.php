<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    //POST DATA in DATABASE
    protected $fillable = ['name', 'position', 'text', 'images'];
}
