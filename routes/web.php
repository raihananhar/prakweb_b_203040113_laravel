<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raihan Anhar",
        "email" => "203040113@unpas.mail.ac.id",
        "image" => "ean.jpg"

    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name

    ]);
});