<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name (is the plural of the class name by default)
    protected $table = 'posts';
    //Primary key (is id by default)
    public $primaryKey = 'id';
    // TimeStamps (is true by default)
    public $timestamps = true;
}
