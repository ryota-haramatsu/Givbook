<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'img', 'comment',];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }


}
