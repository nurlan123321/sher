<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    //POST DATA in DATABASE
    protected $fillable = ['name', 'owka', 'megacom', 'billain', 'images'];
}
