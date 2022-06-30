<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        # code
        return view('posts.index',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
//            'categories' => Category::all(),
//            'currentCategory' => Category::firstWhere('slug', \request('category'))
        ]);
    }

    public function show(Post $post){
        # code
        return view('posts.show', [
            'post'=>$post->load(['category', 'author', 'comments'])
        ]);
    }
}
