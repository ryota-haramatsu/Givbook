<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'image', 'comment',];

    public function user() 
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }


}
