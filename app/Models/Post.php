<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        # code
        $query->when($filters['search'] ?? false, fn ($search) =>
            $query->where(fn($query)=>
                $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%'))
        );

        $query->when($filters['category'] ?? false, fn($query, $category)=>
            $query->whereHas('category', fn($query)=>$query->where('slug', $category))
        );

        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query)=>$query->where('username', $author))
        );



//        if ($filters['search'] ?? false){
//            $query->where('title', 'like', '%' . request('search') . '%')
//                ->orWhere('body', 'like', '%' . request('search') . '%');
//        }
    }
    public function category(){
        # code
        return $this->belongsTo(Category::class);
    }

    public function author(){
        # code
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
        # code
        return $this->hasMany(Comment::class);
    }
}
