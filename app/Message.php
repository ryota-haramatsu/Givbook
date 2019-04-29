<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Book;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'book_id', 'message'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function book()
    {
        return $this->belongsTo(\App\Book::class);
    }
}
