<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ["title"=> "Home"]);
});
Route::get('/about', function () {
    return view('about', ["title"=> "About"]);
});
Route::get('/blogs', function () {
    return view('blogs', ["title"=> "Blog", "blogs"=>Blog::Filter(request(['search', "category", "author"]))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {
    return view('blog',['title'=> 'detail blog'], ['blog'=>$blog]);
});
// Route::get('/author/{user:name}', function (User $user) {
//     // $blogs= $user->blogs->load(['user', 'category']);

//     return view('blogs',['title'=> count($user->blogs) . ' blog by'.$user->name], ['blogs'=>$user->blogs]);
// });

// Route::get('/category/{category:slug}', function(Category $category){
//     return view('blogs', ['title'=> 'category '. $category->name], ['blogs'=> $category->blogs]);
// });

Route::get('/contact', function () {
    return view('contact', ["title"=> "Contact"]);
});

