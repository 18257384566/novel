<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'icon','desc','type','price', 'remember_token','au_id','pub_id','c_id'];
}
