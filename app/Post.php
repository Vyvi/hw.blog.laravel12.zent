<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{   
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'posts'; // bảng posts trong database
    protected $fillable = [
            'title', 
            'thumbnail', 
            'description', 
            'content',
            'slug',
            'user_id',
            'category_id'
            
        ];

    public function category(){
        //category_id
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag','post_tags','post_id','tag_id');
    }
}