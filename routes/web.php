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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Zhofran",
        "email" => "zhofran275@gmail.com",
        "image" => "zee.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});