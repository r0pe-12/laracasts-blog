<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        # code
        if ($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }
    public function category(){
        # code
        return $this->belongsTo(Category::class);
    }

    public function author(){
        # code
        return $this->belongsTo(User::class, 'user_id');
    }
}
