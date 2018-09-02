<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
   protected $fillable = ['todo'];

    public static function getAll(){
    	return Todo::get();
    }
}
