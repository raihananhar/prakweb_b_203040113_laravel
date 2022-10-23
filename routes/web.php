<?php

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
    return view ('home', [
        "title"=>"Home",
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" =>"About",
        "name" => "Raihan",
        "email" => "203040113@mail.unpas.ac.id",
        "image" => "ean.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author" => "Raihan",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis unde nam ullam eos non nisi at aspernatur accusantium? Provident cupiditate beatae expedita soluta quam nemo magni sapiente nostrum, at aliquam! Odit dolor nisi saepe maiores eaque dicta neque? Officiis aperiam, possimus soluta mollitia, dolores, consequuntur dolorum adipisci vel amet quidem tempore perspiciatis odit commodi iste quibusdam corrupti repudiandae accusamus eius quas illo dolore eligendi cum error? Obcaecati ipsa dignissimos consectetur fuga dolorem dolor iure enim omnis dolorum, repudiandae possimus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author" => "Zean",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit praesentium quos, vero magni delectus fugit modi unde adipisci quidem atque incidunt veritatis aut officiis reprehenderit nulla officia tempora ipsam, quia voluptatum numquam cum a deleniti maxime odio! Quod excepturi accusamus rem? Vitae quibusdam excepturi quaerat maxime, totam aliquam. Ut, odit. Vel, reprehenderit incidunt quas voluptate cumque esse recusandae non obcaecati, labore nesciunt delectus. Voluptatem recusandae exercitationem nemo vel! Sapiente doloremque nemo cumque aut quo autem expedita, saepe distinctio dolorum deserunt, repellat inventore debitis veritatis error! Error suscipit excepturi dignissimos inventore est perspiciatis odit modi expedita, deserunt nulla, saepe mollitia ipsum velit. Voluptatum explicabo magni vero exercitationem nisi reiciendis modi saepe."
        ],
    
    ];
    return view ('posts', [
        "title"=> "Posts",
        "posts"=> $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author" => "Raihan",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis unde nam ullam eos non nisi at aspernatur accusantium? Provident cupiditate beatae expedita soluta quam nemo magni sapiente nostrum, at aliquam! Odit dolor nisi saepe maiores eaque dicta neque? Officiis aperiam, possimus soluta mollitia, dolores, consequuntur dolorum adipisci vel amet quidem tempore perspiciatis odit commodi iste quibusdam corrupti repudiandae accusamus eius quas illo dolore eligendi cum error? Obcaecati ipsa dignissimos consectetur fuga dolorem dolor iure enim omnis dolorum, repudiandae possimus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author" => "Zean",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit praesentium quos, vero magni delectus fugit modi unde adipisci quidem atque incidunt veritatis aut officiis reprehenderit nulla officia tempora ipsam, quia voluptatum numquam cum a deleniti maxime odio! Quod excepturi accusamus rem? Vitae quibusdam excepturi quaerat maxime, totam aliquam. Ut, odit. Vel, reprehenderit incidunt quas voluptate cumque esse recusandae non obcaecati, labore nesciunt delectus. Voluptatem recusandae exercitationem nemo vel! Sapiente doloremque nemo cumque aut quo autem expedita, saepe distinctio dolorum deserunt, repellat inventore debitis veritatis error! Error suscipit excepturi dignissimos inventore est perspiciatis odit modi expedita, deserunt nulla, saepe mollitia ipsum velit. Voluptatum explicabo magni vero exercitationem nisi reiciendis modi saepe."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
//
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});