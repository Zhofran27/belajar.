<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;


class Post 
{
     private static $blog_posts = [
    [
        "title" => "Judul pertama",
        "slug" => "judul-pertama",
        "author" => "Muhammad Zhofran",
        "body" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint nesciunt perspiciatis voluptatibus corporis distinctio velit, natus sed molestias dolor molestiae beatae rerum, quaerat ullam explicabo impedit nemo commodi labore consequuntur laboriosam dignissimos fugiat? Tempora, deserunt! Eveniet corporis veritatis enim ut mollitia maxime rem voluptates facilis doloribus? In rerum delectus tenetur nulla totam mollitia ea aliquam reiciendis! Necessitatibus, dolore voluptas magni esse cupiditate aliquam quae soluta in quaerat aut officiis temporibus impedit iure nobis eius repellendus mollitia aspernatur voluptatibus. Ipsa, necessitatibus."
    ],
    [
        "title" => "Judul kedua",
        "slug" => "judul-kedua",
        "author" => "Muhammad Zhofran",
        "body" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint nesciunt perspiciatis voluptatibus corporis distinctio velit, natus sed molestias dolor molestiae beatae rerum, quaerat ullam explicabo impedit nemo commodi labore consequuntur laboriosam dignissimos fugiat? Tempora, deserunt! Eveniet corporis veritatis enim ut mollitia maxime rem voluptates facilis doloribus? In rerum delectus tenetur nulla totam mollitia ea aliquam reiciendis! Necessitatibus, dolore voluptas magni esse cupiditate aliquam quae soluta in quaerat aut officiis temporibus impedit iure nobis eius repellendus mollitia aspernatur voluptatibus. Ipsa, necessitatibus."
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    
    }
}