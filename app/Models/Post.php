<?php 

namespace App\Models;

class Post {
  private static $blog_posts = [
    [
        "title" => "Judul Post pertama",
        "slug" => "judul-post-pertama",
        "author" => "Zean",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Zee",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cupiditate praesentium facere explicabo, maiores architecto adipisci reprehenderit nulla, consectetur ex magni labore nesciunt veniam exercitationem aliquid mollitia error, natus nam!"
    ],
  ];

  public static function all() {
    return collect(self::$blog_posts);
  }

  public static function find($slug) {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }


}