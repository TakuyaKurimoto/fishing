<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class Post extends Model
{
    protected $fillable = [
        'title',
        'tag',
        'body',

    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo(Models\User::class);
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    
  
}   
