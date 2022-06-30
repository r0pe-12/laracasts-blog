<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function author(){
        # code
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post(){
        # code
        return $this->belongsTo(Post::class);
    }
}
