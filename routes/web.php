<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::with(['author', 'category'])->latest();
    if (request('search')){
        $posts = $posts->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('posts',[
        'posts' => $posts->get(),
        'categories' => Category::all(),
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', [
        'post'=>$post
    ]);
})->name('post');

Route::get('/categories/{category:slug}', function (Category $category){
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
        'currentCategory' => $category,
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author){
    dd($author);
})->name('author');
