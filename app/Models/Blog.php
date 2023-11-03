<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog 

{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Afifah Fauziah",
            "body" => "teorem ipsum sitnjsfnoj kjfafoijad"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Afifah Fauziah",
            "body" => "teorem ipsum sitnjsfnoj kjfafoijad"
        ]
        ];
    public static function all()
    {
        return self::$blog_posts;
    }

    public static function getBySlack($slack)
    {
        foreach (self::$blog_posts as $post) {
            if ($post['slug'] === $slack) {
                return $post;
            }
        }
        return null;
    }
}
